<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-09-09
 * Time: 21:40
 */

namespace App\Modules\Common\Library\Mixins;


class ModelMixin
{

    public function bind()
    {
        return function ($param) {
            foreach ($param as $key => $value) {
                $this->$key = $value;
            }
            return $this;
        };

    }

}