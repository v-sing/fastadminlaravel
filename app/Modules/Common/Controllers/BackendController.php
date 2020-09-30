<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-01
 * Time: 13:37
 */

namespace App\Modules\Common\Controllers;


use App\Modules\Admin\Http\Auth;
use App\Modules\Model\AdminLog;
use App\Modules\Model\Config;
use function GuzzleHttp\Psr7\rewind_body;
use Illuminate\View\View;

class BackendController
{

    public function viewInitData(View $view)
    {

        $view->with('config', Config::cache());

        $view->with('site', Config::cache()['site']);
        $view->with('fixedmenu', false);
        $view->with('referermenu', false);
        $view->with('navlist', '');
        $view->with('title', request()->auth()->getTitle());
        AdminLog::setTitle(lang(request()->auth()->getTitle()));
        $auth = new Auth();
        $view->with('auth', $auth);
        if ($auth->isLogin()) {
            $view->with('admin', $auth->getUserInfo());
        }

    }


}