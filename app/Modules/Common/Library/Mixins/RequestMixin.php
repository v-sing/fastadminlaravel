<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-22
 * Time: 18:09
 */

namespace App\Modules\Common\Library\Mixins;


use App\Modules\Admin\Http\Auth;

/**
 * 自定义Request
 * Class RequestMixin
 * @package App\Modules\Common\Library\Mixins
 */
class RequestMixin
{

    protected $module;
    protected $controller;
    protected $action;
    public $auth = null;

    /**
     * 初始化配置
     * @return \Closure
     */
    public function _initialize()
    {
        return function () {
            $this->getRealRoute();
            $this->auth();
        };
    }

    /**
     * 判断是否为ajax请求
     * @return \Closure
     */
    public function isAjax()
    {
        return function () {
            return 'XMLHttpRequest' == $this->headers->get('X-Requested-With');
        };
    }

    /**
     * 初始化权限
     * @return \Closure
     */
    public function auth()
    {
        return function () {
            $this->auth = Auth::instance();
        };

    }

    public function getRealRoute()
    {
        return function ($real = '') {

            $app = app();
            if ($real == '') {
                $real = ltrim(\request()->getPathInfo(), '/');
            }
            $routes = $app->routes->getRoutes();
            $uri    = array_column(toArray($routes), 'uri');
            $action = array_column(toArray($routes), 'action');
            foreach ($action as $k => $v) {
                if (!isset($v['prefix']) || is_null($v['prefix'])) {
                    $action[$k]['prefix'] = 'web';
                }
                if (!isset($v['controller'])) {
                    $action[$k]['controller'] = '';
                }
            }
            $module     = array_column($action, 'prefix');
            $controller = array_column($action, 'controller');
            $array      = [];
            foreach ($controller as $key => $value) {
                if (preg_match('/([\w]+)Controller@(.*?)$/', $value, $matches)) {
                    $controller = strtolower($matches[1]);
                    $action     = strtolower($matches[2]);
                    preg_match('/.*Controllers/', $value, $matches1);
                    if ($matches1) {
                        $path     = str_replace(['@', '\\', 'Controller'], ['/', '/', ''], str_replace($matches1[0], '', $value));
                        $pathinfo = \Illuminate\Support\Facades\Route::parseUrlPath($path);
                        //
                        $controller = strtolower($pathinfo[0][(count($pathinfo[0]) - 2)]);
                        $action     = strtolower($pathinfo[0][(count($pathinfo[0]) - 1)]);
                        $info       = $pathinfo[0];
                        unset($info[(count($pathinfo[0]) - 2)]);
                        unset($info[(count($pathinfo[0]) - 1)]);
                        $twoPath    = implode('.', $info) . '.';
                        $controller = $twoPath . $controller;
                    }
                    $array[$key] = [
                        'uri'        => $uri[$key],
                        'module'     => $module[$key],
                        'controller' => $controller,
                        'action'     => $action,
                        'realPath'   => $module[$key] . '/' . str_replace('.', '/', $controller) . '/' . $action
                    ];
                } else {
                    $array[$key] = [
                        'uri'        => $uri[$key],
                        'module'     => $module[$key],
                        'controller' => '',
                        'action'     => '',
                        'realPath'   => $module[$key] . $key
                    ];
                }
            }
            $index            = array_search($real, $uri);
            $this->module     = $array[$index]['module'];
            $this->controller = $array[$index]['controller'];
            $this->action     = $array[$index]['action'];
            return $array[$index];
        };

    }

    public function module()
    {
        return function () {
            return $this->module;
        };
    }

    public function controller()
    {
        return function () {
            return $this->controller;
        };
    }

    public function action()
    {
        return function () {
            return $this->action;
        };
    }


}