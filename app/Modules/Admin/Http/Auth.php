<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-02
 * Time: 14:02
 */

namespace App\Modules\Admin\Http;

use App\Modules\Common\Library\Auth as BaseAuth;

use App\Modules\Model\AuthRule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;
use App\Modules\Model\Admin;
use App\Modules\Model\AuthGroupAccess;
use App\Modules\Model\AuthGroup;
use App\Modules\Common\Library\Tree;
use App\Modules\Common\Library\Random;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class Auth extends BaseAuth
{
    protected $_error = '';
    protected $requestUri = '';
    protected $breadcrumb = [];
    protected $logined = false; //登录状态
    protected $adminModel = null;
    protected $AuthGroupModel = null;
    protected $AuthGroupAccessModel = null;

    public function __construct()
    {
        parent::__construct();
        $this->adminModel           = new Admin();
        $this->AuthGroupModel       = new AuthGroup;
        $this->AuthGroupAccessModel = new AuthGroupAccess;

    }

    public function __get($name)
    {
        return Session::get('admin.' . $name);
    }

    /**
     * 管理员登录
     *
     * @param   string $username 用户名
     * @param   string $password 密码
     * @param   int $keeptime 有效时长
     * @return  boolean
     */
    public function login($username, $password, $keeptime = 0)
    {
        $admin = Admin::where(['username' => $username])->first();;
        if (!$admin) {
            $this->setError('Username is incorrect');
            return false;
        }
        if (config('admin.login_failure_retry') && $admin->loginfailure >= 10 && time() - $admin->updatetime < 86400) {
            $this->setError('Please try again after 1 day');
            return false;
        }
        if (!Hash::check($password . $admin->salt, $admin->password)) {
            $admin->loginfailure++;
            $admin->save();
            $this->setError('Password is incorrect');
            return false;
        }
        $admin->loginfailure = 0;
        $admin->logintime    = time();
        $admin->token        = Random::uuid();
        $admin->save();
        Session::put("admin", $admin->toArray());
        $this->keeplogin($keeptime);
        return true;
    }

    /**
     * 刷新保持登录的Cookie
     *
     * @param   int $keeptime
     * @return  boolean
     */
    protected function keeplogin($keeptime = 0)
    {

        if ($keeptime) {
            $expiretime = time() + $keeptime;
            $key        = md5(md5($this->id) . md5($keeptime) . md5($expiretime) . $this->token);
            $data       = [$this->id, $keeptime, $expiretime, $key];
            Cookie::queue('keeplogin', implode('|', $data), 86400 * 30);
            return true;
        }

        return false;
    }

    /**
     * 验证是否有权限
     * @param array|string $name
     * @param string $uid
     * @param string $relation
     * @param string $mode
     * @return bool
     */
    public function check($name, $uid = '', $relation = 'or', $mode = 'url')
    {
        if (!$uid) {
            $uid = $this->id;
        }
        return parent::check($name, $uid, $relation, $mode);
    }

    /**
     * 检测当前控制器和方法是否匹配传递的数组
     *
     * @param array $arr 需要验证权限的数组
     */
    public function match($arr = [])
    {

        $arr = is_array($arr) ? $arr : explode(',', $arr);
        if (!$arr) {
            return FALSE;
        }

        $arr = array_map('strtolower', $arr);
        // 是否存在
        if (in_array(strtolower(\Future\Admin\Facades\Admin::action()), $arr) || in_array('*', $arr)) {
            return TRUE;
        }

        // 没找到匹配
        return FALSE;
    }

    /**
     * 检测是否登录
     *
     * @return boolean
     */
    public function isLogin()
    {

        if ($this->logined) {
            return true;
        }
        $admin = Session::get('admin');

        if (!$admin) {
            return false;
        }
        //判断是否同一时间同一账号只能在一个地方登录
        if (config('admin.login_unique')) {
            $my = Admin::find($admin['id'])->toArray();
            if (!$my || $my['token'] != $admin['token']) {
                return false;
            }
        }
        $this->logined = true;
        return true;
    }

    /**
     * 获取当前请求的URI
     * @return string
     */
    public function getRequestUri()
    {
        return $this->requestUri;
    }

    /**
     * 设置当前请求的URI
     * @param string $uri
     */
    public function setRequestUri($uri)
    {
        $this->requestUri = $uri;
    }

    public function getGroups($uid = null)
    {
        $uid = $this->getAdminId($uid);
        return parent::getGroups($uid);
    }

    public function getGroupAll()
    {
        $user_groups = $this->AuthGroupAccessModel->from('auth_group_access as aga')
            ->leftJoin($this->config['auth_group'] . ' as ag', 'ag.id', '=', 'aga.group_id')
            ->where(['ag.status' => 'normal'])
            ->select('aga.uid', 'aga.group_id', 'ag.id', 'ag.pid', 'ag.name', 'ag.rules')
            ->get()->toArray();
        $groups      = [];
        foreach ($user_groups as $v) {
            $groups[$v['id']][] = $v['name'];
        }
        return $groups;
    }

    public function getGroupsAccessAll()
    {
        $user_groups = $this->AuthGroupAccessModel->from('auth_group_access as aga')
            ->leftJoin($this->config['auth_group'] . ' as ag', 'ag.id', '=', 'aga.group_id')
            ->where(['ag.status' => 'normal'])
            ->select('aga.uid', 'aga.group_id', 'ag.id', 'ag.pid', 'ag.name', 'ag.rules')
            ->get()->toArray();
        $groups      = [];
        foreach ($user_groups as $v) {
            $groups[$v['uid']][] = $v['name'];
        }
        return $groups;
    }

    public function getRuleList($uid = null)
    {
        $uid = $this->getAdminId($uid);
        return parent::getRuleList($uid);
    }

    public function getUserInfo($uid = null)
    {
        $uid = $this->getAdminId($uid);

        return $uid != $this->id ? Admin::get(intval($uid)) : Session::get('admin');
    }

    public function getRuleIds($uid = null)
    {
        $uid = $this->getAdminId($uid);
        return parent::getRuleIds($uid);
    }

    public function isSuperAdmin()
    {
        return in_array('*', $this->getRuleIds()) ? TRUE : FALSE;
    }

    /**
     * 获取管理员所属于的分组ID
     * @param int $uid
     * @return array
     */
    public function getGroupIds($uid = null)
    {
        $groups   = $this->getGroups($uid);
        $groupIds = [];
        foreach ($groups as $K => $v) {
            $groupIds[] = (int)$v['group_id'];
        }
        return $groupIds;
    }

    /**
     * 取出当前管理员所拥有权限的分组
     * @param boolean $withself 是否包含当前所在的分组
     * @return array
     */
    public function getChildrenGroupIds($withself = false)
    {
        //取出当前管理员所有的分组
        $groups   = $this->getGroups();
        $groupIds = [];
        foreach ($groups as $k => $v) {
            $groupIds[] = $v['id'];
        }
        // 取出所有分组
        $groupList = $this->AuthGroupModel->where(['status' => 'normal'])->get()->toArray();
        $objList   = [];
        foreach ($groups as $K => $v) {
            if ($v['rules'] === '*') {
                $objList = $groupList;
                break;
            }
            // 取出包含自己的所有子节点
            $childrenList = Tree::instance()->init($groupList)->getChildren($v['id'], true);
            $obj          = Tree::instance()->init($childrenList)->getTreeArray($v['pid']);
            $objList      = array_merge($objList, Tree::instance()->getTreeList($obj));
        }
        $childrenGroupIds = [];
        foreach ($objList as $k => $v) {
            $childrenGroupIds[] = $v['id'];
        }
        if (!$withself) {
            $childrenGroupIds = array_diff($childrenGroupIds, $groupIds);
        }
        return $childrenGroupIds;
    }


    /**
     * 取出当前管理员所拥有权限的管理员
     * @param boolean $withself 是否包含自身
     * @return array
     */
    public function getChildrenAdminIds($withself = false)
    {
        $childrenAdminIds = [];
        if (!$this->isSuperAdmin()) {
            $groupIds      = $this->getChildrenGroupIds(false);
            $authGroupList = $this->AuthGroupAccessModel->
            select('uid', 'group_id')
                ->whereIn('group_id', $groupIds)
                ->get()->toArray();

            foreach ($authGroupList as $k => $v) {
                $childrenAdminIds[] = $v['uid'];
            }
        } else {
            //超级管理员拥有所有人的权限
            $childrenAdminIds = toArray(Admin::all(['id'])->toArray());
            $childrenAdminIds = array_column($childrenAdminIds, 'id');
        }
        if ($withself) {
            if (!in_array($this->id, $childrenAdminIds)) {
                $childrenAdminIds[] = $this->id;
            }
        } else {
            $childrenAdminIds = array_diff($childrenAdminIds, [$this->id]);
        }
        return $childrenAdminIds;
    }

    /**
     * 获得面包屑导航
     * @param string $path
     * @return array
     */
    public function getBreadCrumb($path = '')
    {

        if ($this->breadcrumb || !$path)
            return $this->breadcrumb;
        $path_rule_id = 0;

        foreach ($this->rules as $rule) {
            $path_rule_id = $rule['name'] == $path ? $rule['id'] : $path_rule_id;
        }

        if ($path_rule_id) {
            $this->breadcrumb = Tree::instance()->init($this->rules)->getParents($path_rule_id, true);
            foreach ($this->breadcrumb as $k => &$v) {
                $v['url']   = url($v['name']);
                $v['title'] = lang($v['title']);
            }
        }
        return $this->breadcrumb;
    }

    /**
     * 获取左侧和顶部菜单栏
     *
     * @param array $params URL对应的badge数据
     * @param string $fixedPage 默认页
     * @return array
     */
    public function getSidebar($params = [], $fixedPage = 'dashboard')
    {
        $colorArr  = ['red', 'green', 'yellow', 'blue', 'teal', 'orange', 'purple'];
        $colorNums = count($colorArr);
        $badgeList = [];
        $module    =config('modulename');
//        dump($module);exit;
        // 生成菜单的badge
        foreach ($params as $k => $v) {
            $url = $k;
            if (is_array($v)) {
                $nums  = isset($v[0]) ? $v[0] : 0;
                $color = isset($v[1]) ? $v[1] : $colorArr[(is_numeric($nums) ? $nums : strlen($nums)) % $colorNums];
                $class = isset($v[2]) ? $v[2] : 'label';
            } else {
                $nums  = $v;
                $color = $colorArr[(is_numeric($nums) ? $nums : strlen($nums)) % $colorNums];
                $class = 'label';
            }
            //必须nums大于0才显示
            if ($nums) {
                $badgeList[$url] = '<small class="' . $class . ' pull-right bg-' . $color . '">' . $nums . '</small>';
            }
        }

        // 读取管理员当前拥有的权限节点
        $userRule   = $this->getRuleList();
        $selected   = $referer = [];
        $refererUrl = Session::get('referer');
        // 必须将结果集转换为数组
        $ruleList = Cache::get("__MENU__");
        if (!$ruleList) {
            $ruleList = AuthRule::where(['status' => 'normal', 'ismenu' => 1])->orderby('weigh', 'desc')->get()->toArray();
            Cache::put("__MENU__", $ruleList);
        }
        foreach ($ruleList as $k => &$v) {

            if (!isset($userRule[0])) {
                if (!isset($userRule[$v['id']])) {
                    unset($ruleList[$k]);
                    continue;
                }
            }
            $v['icon']   = $v['icon'] . ' fa-fw';

            $v['url']    =  URL::asset( $module . '/' . $v['name']);
            $v['badge']  = isset($badgeList[$v['name']]) ? $badgeList[$v['name']] : '';
            $v['py']     = pinyin_abbr($v['title']);
            $v['pinyin'] = pinyin_permalink($v['title']);
            $v['title']  = lang($v['title']);
            $selected    = $v['name'] == $fixedPage ? $v : $selected;
            $referer     = url($v['url']) == $refererUrl ? $v : $referer;
        }
        if ($selected == $referer) {
            $referer = [];
        }
        $selected && $selected['url'] = url($selected['url']);
        $referer && $referer['url'] = url($referer['url']);

        $select_id = $selected ? $selected['id'] : 0;
        $menu      = $nav = '';
        if (config('app.admin.multiplenav')) {
            $topList = [];
            foreach ($ruleList as $index => $item) {
                if (!$item['pid']) {
                    $topList[] = $item;
                }
            }
            $selectParentIds = [];
            $tree            = Tree::instance();
            $tree->init($ruleList);
            if ($select_id) {
                $selectParentIds = $tree->getParentsIds($select_id, true);
            }
            foreach ($topList as $index => $item) {
                $childList = Tree::instance()->getTreeMenu($item['id'], '<li class="@class" pid="@pid"><a href="@url@addtabs" addtabs="@id" url="@url" py="@py" pinyin="@pinyin"><i class="@icon"></i> <span>@title</span> <span class="pull-right-container">@caret @badge</span></a> @childlist</li>', $select_id, '', 'ul', 'class="treeview-menu"');
                $current   = in_array($item['id'], $selectParentIds);
                $url       = $childList ? 'javascript:;' : url($item['url']);
                $addtabs   = $childList || !$url ? "" : (stripos($url, "?") !== false ? "&" : "?") . "ref=addtabs";
                $childList = str_replace('" pid="' . $item['id'] . '"', ' treeview ' . ($current ? '' : 'hidden') . '" pid="' . $item['id'] . '"', $childList);
                $nav       .= '<li class="' . ($current ? 'active' : '') . '"><a href="' . $url . $addtabs . '" addtabs="' . $item['id'] . '" url="' . $url . '"><i class="' . $item['icon'] . '"></i> <span>' . $item['title'] . '</span> <span class="pull-right-container"> </span></a> </li>';
                $menu      .= $childList;
            }
        } else {
            // 构造菜单数据
            Tree::instance()->init($ruleList);
            $menu = Tree::instance()->getTreeMenu(0, '<li class="@class"><a href="@url@addtabs" addtabs="@id" url="@url" py="@py" pinyin="@pinyin"><i class="@icon"></i> <span>@title</span> <span class="pull-right-container">@caret @badge</span></a> @childlist</li>', $select_id, '', 'ul', 'class="treeview-menu"');
            if ($selected) {
                $nav .= '<li role="presentation" id="tab_' . $selected['id'] . '" class="' . ($referer ? '' : 'active') . '"><a href="#con_' . $selected['id'] . '" node-id="' . $selected['id'] . '" aria-controls="' . $selected['id'] . '" role="tab" data-toggle="tab"><i class="' . $selected['icon'] . ' fa-fw"></i> <span>' . $selected['title'] . '</span> </a></li>';
            }
            if ($referer) {
                $nav .= '<li role="presentation" id="tab_' . $referer['id'] . '" class="active"><a href="#con_' . $referer['id'] . '" node-id="' . $referer['id'] . '" aria-controls="' . $referer['id'] . '" role="tab" data-toggle="tab"><i class="' . $referer['icon'] . ' fa-fw"></i> <span>' . $referer['title'] . '</span> </a> <i class="close-tab fa fa-remove"></i></li>';
            }
        }
        return [$menu, $nav, $selected, $referer];
    }

    /**
     * 获取错误信息
     * @return string
     */
    public function getError()
    {
        return $this->_error;
    }

    /**
     * 获取错误信息
     * @return string
     */
    public function setError($error)
    {
        return $this->_error = $error;
    }

    /**
     * 注销登录
     */
    public function logout()
    {
        $admin = Admin::find(Session::get('admin.id'));
        if (!$admin) {
            return true;
        }
        $admin->token = '';
        $admin->save();
        $session = Session::forget("admin");
        $cookie  = Cookie::unqueue('keeplogin');
        return true;
    }

    /**
     * 自动登录
     * @return boolean
     */
    public function autologin()
    {
        $keeplogin = Cookie::get('keeplogin');

        if (!$keeplogin) {
            return false;
        }
        list($id, $keeptime, $expiretime, $key) = explode('|', $keeplogin);
        if ($id && $keeptime && $expiretime && $key && $expiretime > time()) {
            $admin = Admin::find($id);
            if (!$admin || !$admin->token) {
                return false;
            }
            //token有变更
            if ($key != md5(md5($id) . md5($keeptime) . md5($expiretime) . $admin->token)) {
                return false;
            }
            Session::put("admin", $admin->toArray());
            //刷新自动登录的时效
            $this->keeplogin($keeptime);
            return true;
        } else {
            return false;
        }
    }

    /**
     * 获取id
     * @param null $uid
     * @return mixed|null
     */
    protected function getAdminId($uid = null)
    {
        return $uid = is_null($uid) ? $this->id = Session::get('admin.id') : $uid;
    }
}