<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-09-27
 * Time: 09:14
 */

namespace App\Modules\Common\Behaviorals;

use App\Modules\Model\AdminLog as log;

class AdminLog
{


    public function run(&$param)
    {
        if (request()->isMethod('post')) {
            log::record();
        }
        return true;
    }

}