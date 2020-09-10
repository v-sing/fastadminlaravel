<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-22
 * Time: 18:09
 */

namespace App\Modules\Common\Library\Mixins;


use App\Modules\Admin\Http\Auth;

class RequestMixin
{

    public function isAjax()
    {
        return function () {
            return 'XMLHttpRequest' == $this->headers->get('X-Requested-With');
        };
    }

    public function auth()
    {
        return function () {
            return new Auth();
        };

    }


}