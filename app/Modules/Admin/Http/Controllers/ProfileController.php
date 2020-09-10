<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-11
 * Time: 10:34
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Common\Library\Random;
use App\Modules\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{

    public function index(Request $request)
    {

        if ($request->isAjax()) {

            $this->json(["total" => 0, "rows" => []]);
        }
        return $this->view();

    }


    public function update(Request $request)
    {
        if ($request->isAjax()) {
            $params = $request->post('row');
            $params = array_filter(array_intersect_key($params, array_flip(array('email', 'nickname', 'password', 'avatar'))));
            unset($v);
            if (isset($params['password'])) {
                $params['salt']     = Random::alnum();

                $params['password'] = encrypt($params['password'] . $params['salt']);
            }
            if ($params) {
                $admin = Admin::where(['id' => $request->auth()->id])->first();
                $admin->bind($params);
                $admin->save();
                //因为个人资料面板读取的Session显示，修改自己资料后同时更新Session
                Session::put("admin", $admin->toArray());
                $this->success();
            }
            $this->error();
        }
    }
}