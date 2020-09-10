<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-01
 * Time: 14:51
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Common\Library\IdentityInformation;
use Illuminate\Http\Request;

class AjaxController extends Controller
{

    public function lang(Request $request)
    {
        $controller = $request->input('controllername');
        $array      = is_array(trans('admin::' . $controller)) ? trans('admin::' . $controller) : [];
        $array      = array_merge(trans('admin::common'), $array);
        return jsonp('define', $array);
    }

    public function real()
    {
        $IdentityInformation = new IdentityInformation();
        $IdentityInformation->getName();
        $IdentityInformation->getIdentity();
        $IdentityInformation->getIndustries();
        $real = $IdentityInformation->info();
        dd($real);
    }
}