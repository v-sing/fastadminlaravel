<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-01
 * Time: 13:37
 */

namespace App\Modules\Common\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Common\Library\Traits\Backend;


class BackendController extends Controller
{

    /**
     * 无需登录的方法,同时也就不需要鉴权了
     * @var array
     */
    protected $noNeedLogin = [];

    /**
     * 无需鉴权的方法,但需要登录
     * @var array
     */
    protected $noNeedRight = [];
    /**
     * 需鉴权的方法,需要登录
     * @var array
     */
    protected $needRightOnly = [];

    /**
     * 需登录的方法
     * @var array
     */
    protected $needLoginOnly = [];
    /**
     * 布局模板
     * @var string
     */
    protected $layout = 'admin::layouts.site';

    /**
     * 权限控制类
     * @var Auth
     */
    protected $auth = null;

    /**
     *
     * @var null
     */
    protected $model = null;

    /**
     * 快速搜索时执行查找的字段
     */
    protected $searchFields = 'id';

    /**
     * 是否是关联查询
     */
    protected $relationSearch = false;

    /**
     * 是否开启数据限制
     * 支持auth/personal
     * 表示按权限判断/仅限个人
     * 默认为禁用,若启用请务必保证表中存在admin_id字段
     */
    protected $dataLimit = false;

    /**
     * 数据限制字段
     */
    protected $dataLimitField = 'admin_id';

    /**
     * 数据限制开启时自动填充限制字段值
     */
    protected $dataLimitFieldAutoFill = true;

    /**
     * 是否开启Validate验证
     */
    protected $modelValidate = false;

    /**
     * 是否开启模型场景验证
     */
    protected $modelSceneValidate = false;

    /**
     * Multi方法可批量修改的字段
     */
    protected $multiFields = 'status';

    /**
     * Selectpage可显示的字段
     */
    protected $selectpageFields = '*';

    /**
     * 前台提交过来,需要排除的字段数据
     */
    protected $excludeFields = "";

    /**
     * 导入文件首行类型
     * 支持comment/name
     * 表示注释或字段名
     */
    protected $importHeadType = 'comment';


    use Backend;

    public function __construct()
    {
        $this->_initialize();
    }

    protected function _initialize()
    {
        //初始化中间件
        $this->middleware('admin.backend');
        //验证登陆
        $login = $this->middleware('admin.login');
        $auth  = $this->middleware('admin.auth');
        if (!empty($this->noNeedLogin)) {
            $login->except($this->noNeedLogin);
        } elseif (!empty($this->needLoginOnly)) {
            $login->only($this->needLoginOnly);
        }
        //验证菜单权限
        if (!empty($this->noNeedRight)) {
            $auth->except($this->noNeedRight);
        } elseif (!empty($this->needRightOnly)) {
            $auth->only($this->needRightOnly);
        }
        $this->middleware('admin.auth')->except($this->noNeedRight)->only($this->needRightOnly);
        //重定向
        $this->middleware('admin.redirect');
        //初始化公共模版
        $this->middleware('admin.view');
    }
}