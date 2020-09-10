<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-02
 * Time: 13:48
 */

namespace App\Modules\Common\Library;

use App\Modules\Model\AuthGroupAccess;
use App\Modules\Model\AuthRule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/*
 * 权限验证
 * Class Auth
 * @package App\Libraries\Src
 */

class Auth
{
    /**
     * 实例
     * @var null
     */
    protected static $instance = null;
    protected $rules = [];
    /**
     * 当前请求实例
     * @var Request
     */
    protected $request;
    //默认配置
    protected $config = [
        'auth_on'           => 1, // 权限开关
        'auth_type'         => 2, // 认证方式，1为实时认证；2为登录认证。
        'auth_group'        => 'auth_group', // 用户组数据表名
        'auth_group_access' => 'auth_group_access', // 用户-用户组关系表
        'auth_rule'         => 'auth_rule', // 权限规则表
        'auth_user'         => 'user', // 用户信息表
    ];

    /**
     * 类架构函数
     * Auth constructor.
     */
    public function __construct()
    {
        if ($auth = config('app.auth')) {
            $this->config = array_merge($this->config, $auth);
        }
        // 初始化request
        $this->request = request();
    }

    /**
     * 单例
     * @return mixed
     */
    public static function instance()
    {
        $name = get_called_class();

        if (!isset(self::$instance[$name])) {
            self::$instance[$name] = new $name();
        }
        return self::$instance[$name];
    }

    /**
     * 检查权限
     * @param       $name   string|array    需要验证的规则列表,支持逗号分隔的权限规则或索引数组
     * @param       $uid    int             认证用户的id
     * @param       string $relation 如果为 'or' 表示满足任一条规则即通过验证;如果为 'and'则表示需满足所有规则才能通过验证
     * @param       string $mode 执行验证的模式,可分为url,normal
     * @return bool               通过验证返回true;失败返回false
     */
    public function check($name, $uid, $relation = 'or', $mode = 'url')
    {
//        $name = Admin::module() . '/' . $name;
        if (!$this->config['auth_on']) {
            return true;
        }
        // 获取用户需要验证的所有有效规则列表
        $rulelist = $this->getRuleList($uid);
         if (in_array('*', $rulelist))
            return true;
        if (is_string($name)) {
            $name = strtolower($name);
            if (strpos($name, ',') !== false) {
                $name = explode(',', $name);
            } else {
                $name = [$name];
            }
        }
//        dd($name);
        $list = []; //保存验证通过的规则名
        if ('url' == $mode) {
            $REQUEST = unserialize(strtolower(serialize(input())));
        }
        $modulename=config('modulename');
        $rulelist[] = 'admin';
        foreach ($rulelist as $rule) {
            if ($rule != $modulename) {
                $rule = $modulename . '/' . $rule;

            }
            $rule1    = $rule;
            $realPath = getRealRoute($rule);
            $rule     = $realPath['realPath'];
            $query    = preg_replace('/^.+\?/U', '', $rule);
            if ('url' == $mode && $query != $rule) {
                parse_str($query, $param); //解析规则中的param
                $intersect = array_intersect_assoc($REQUEST, $param);
                $rule      = preg_replace('/\?.*$/U', '', $rule);
                if (in_array($rule, $name) && $intersect == $param) {
                    //如果节点相符且url参数满足
                    $list[] = $rule;
                }
            } else {
//                dump([$rule1]);
                if (in_array($rule, $name)) {
                    $list[] = $rule;
                }
            }
        }

        if ('or' == $relation && !empty($list)) {
            return true;
        }
        $diff = array_diff($name, $list);
        if ('and' == $relation && empty($diff)) {
            return true;
        }
        return false;
    }

    /**
     * 获得权限规则列表
     * @param integer $uid 用户id
     * @return array
     */
    public function getRuleList($uid)
    {
        static $_rulelist = []; //保存用户验证通过的权限列表
        if (isset($_rulelist[$uid])) {
            return $_rulelist[$uid];
        }
        if (2 == $this->config['auth_type'] && Session::has('_rule_list_' . $uid)) {
            return Session::get('_rule_list_' . $uid);
        }

        // 读取用户规则节点
        $ids = $this->getRuleIds($uid);

        if (empty($ids)) {
            $_rulelist[$uid] = [];
            return [];
        }

        // 筛选条件
        $db    = AuthRule::query();
        $where = [
            'status' => 'normal'
        ];
        if ($ids[0] != "*") {
            $db->whereIn('id', $ids);
        }
        //读取用户组所有权限规则
        $rules       = $db->where($where)->select('id', 'pid', 'condition', 'icon', 'name', 'title', 'ismenu')->get()->toArray();
        $this->rules = $rules;
        //循环规则，判断结果。
        $rulelist = []; //
        if (in_array('*', $ids)) {
            $rulelist[] = "*";
        }
        foreach ($this->rules as $rule) {
            //超级管理员无需验证condition
            if (!empty($rule['condition']) && !in_array('*', $ids)) {
                //根据condition进行验证
                $user    = $this->getUserInfo($uid); //获取用户信息,一维数组
                $command = preg_replace('/\{(\w*?)\}/', '$user[\'\\1\']', $rule['condition']);
                @(eval('$condition=(' . $command . ');'));
                if ($condition) {
                    $rulelist[$rule['id']] = strtolower($rule['name']);
                }
            } else {
                //只要存在就记录
                $rulelist[$rule['id']] = strtolower($rule['name']);
            }
        }
        $_rulelist[$uid] = $rulelist;
        //登录验证则需要保存规则列表
        if (2 == $this->config['auth_type']) {
            //规则列表结果保存到session
            Session::put('_rule_list_' . $uid, $rulelist);
        }
        return array_unique($rulelist);
    }

    /**
     * 读取用户所属用户组
     * @param $uid
     * @return array
     */
    public function getRuleIds($uid)
    {

        //读取用户所属用户组
        $groups = $this->getGroups($uid);
        $ids    = []; //保存用户所属用户组设置的所有权限规则id
        if (!isset($groups['rules'])) {
            foreach ($groups as $g) {
                $ids = array_merge($ids, trim($g['rules']) == '*' ? ['*'] : explode(',', trim($g['rules'], ',')));
            }
        } else {
            $ids = array_merge($ids, trim($groups['rules']) == '*' ? ['*'] : explode(',', trim($groups['rules'], ',')));
        }
        $ids = array_unique($ids);
        return $ids;
    }

    /**
     * 根据用户id获取用户组,返回值为数组
     * @param  $uid int     用户id
     * @return array       用户所属的用户组 array(
     *              array('uid'=>'用户id','group_id'=>'用户组id','name'=>'用户组名称','rules'=>'用户组拥有的规则id,多个,号隔开'),
     *              ...)
     */
    public function getGroups($uid)
    {
        $info        = AuthGroupAccess::with(['authGroup'])->where(['uid' => $uid])->select('*')->first();
        $user_groups = [];
        if ($info) {
            $user_groups = [
                'uid'      => $info->uid,
                'group_id' => $info->group_id,
                'id'       => $info->authGroup->id,
                'name'     => $info->authGroup->name,
                'rules'    => $info->authGroup->rules,
            ];
        }
        $groups[$uid] = $user_groups ?: [];
        return $groups;
    }

    /**
     * 根据用户id获取用户组,返回值为数组
     * @param  $uid int     用户id
     * @return array       用户所属的用户组 array(
     *              array('uid'=>'用户id','group_id'=>'用户组id','name'=>'用户组名称','rules'=>'用户组拥有的规则id,多个,号隔开'),
     *              ...)
     */
    public function getGroupsAccess($uid)
    {
        $info        = AuthGroupAccess::with(['authGroup'])
            ->whereHas('authGroup', function ($query) {
                $query->where(['status' => 'normal']);
            })
            ->where(['uid' => $uid])->select('*')->first();
        $user_groups = [];
        if ($info) {
            $user_groups = [
                'id'       => $info->uid,
                'group_id' => $info->group_id
            ];
        }
        return $user_groups;
    }

    /**
     * 获得用户资料
     * @param $uid
     * @return mixed
     */
    protected function getUserInfo($uid)
    {
        static $user_info = [];

        $prefix = config('database.connections.mysql.prefix');
        $user   = DB::table($this->config['auth_user']);
        // 获取用户表主键
        $PRIMARY = DB::select('SELECT column_name FROM INFORMATION_SCHEMA.`KEY_COLUMN_USAGE` WHERE table_name=\'' . $prefix . $this->config['auth_user'] . '\' AND constraint_name=\'PRIMARY\'');
        $_pk     = is_string($PRIMARY[0]->column_name) ? $PRIMARY[0]->column_name : 'uid';
        if (!isset($user_info[$uid])) {
            $user_info[$uid] = $user->where($_pk, $uid)->first();
        }
        return $user_info[$uid];
    }
}