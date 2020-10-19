<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-11
 * Time: 10:34
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Modules\Common\Controllers\BackendController;
use App\Modules\Common\Library\Random;
use App\Modules\Model\Admin;
use App\Modules\Model\AdminLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileController extends BackendController
{

    public function index(Request $request)
    {

        if ($request->isAjax()) {

            list($where, $sort, $order, $offset, $limit) = $this->buildparams(AdminLog::class);
            $mode  = AdminLog::query();
            $total = $mode
                ->where($where)
                ->count();
            $rows  = $mode
                ->where($where)
                ->offset($offset)
                ->limit($limit)
                ->orderBy($sort, $order)
                ->get();

            $this->json(["total" => $total, "rows" => $rows]);
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
                $params['password'] = Hash::make($params['password'] . $params['salt']);
            }
            if ($params) {
                $array = Session::get("admin");
                Admin::where(['id' => $request->auth()->id])->update($params);
                $array = array_merge($array, $params);
                //因为个人资料面板读取的Session显示，修改自己资料后同时更新Session
                Session::put("admin", $array);
                $this->success();
            }
            $this->error();
        }
    }
}