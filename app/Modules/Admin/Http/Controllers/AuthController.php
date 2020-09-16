<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-09-16
 * Time: 21:56
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function adminIndex(Request $request)
    {

        if ($request->isAjax()) {
            $this->ajaxReturn(['total' => 0, 'rows' => []]);
        }


        return $this->view();
    }


}