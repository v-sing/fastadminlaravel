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
            return Auth::instance();
        };

    }


}