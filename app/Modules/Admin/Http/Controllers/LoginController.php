<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-06-30
 * Time: 21:27
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Admin\Http\Auth;
use App\Modules\Model\AdminLog;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    /**
     * 登陆
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login(Request $request)
    {
        $auth = new Auth();
        if ($auth->isLogin()) {
            $this->success(trans('admin::login.You\'ve logged in, do not login again'), 'admin/index');
        }
        if ($request->isMethod('post')) {
            AdminLog::setTitle('登录');
            $username  = $request->post('username');
            $password  = $request->post('password');
            $captcha   = $request->post('captcha');
            $keeplogin = $request->post('keeplogin', 0);
            if (config('admin.login_captcha') && !captcha_check($captcha)) {
                $this->error(trans('admin::login.Verification code is incorrect'));
            }
            $result = $auth->login($username, $password, $keeplogin ? 1000 : 0);
            if (!$result) {
                $this->error(trans('admin::login.' . $auth->getError()));
            }
            $this->success(trans('admin::login.Login successful'), '/admin/index');
        }
        if ($auth->autologin()) {
            $this->success('Automatic login successful');
        }
        return view('admin::login.index');

    }

    public function logout()
    {
        $auth = new Auth();
        $auth->logout();
        $this->success(trans('admin::login.Logout successful'), '/admin/login');
    }

}