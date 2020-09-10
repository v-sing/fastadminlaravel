<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-01
 * Time: 13:37
 */

namespace App\Modules\Common\Controllers;


use App\Modules\Admin\Http\Auth;
use Illuminate\View\View;

class BackendController
{

    public function viewInitData(View $view)
    {
        $route  = getRealRoute();
        $config = [
            'admin' => [
                'login_captcha'    => true,
                'login_background' => '/assets/img/loginbg.jpg',
                'multiplenav'      => true,
                'lang_switch_on'   => true,
                'cdnurl'           => '',
                'api_url'             => 'https://api.fastadmin.net',
            ],

            'site'           => [
                'name'          => 'FastAdmin',
                'cdnurl'        => '',
                'version'       => time(),//'1.0.9',
                'timezone'      => 'Asia/Shanghai',
                'languages'     => [
                    'backend'  => 'en',
                    'frontend' => 'zh-cn'
                ],
                'Languagetypes' => [
                    'en' => 'en'
                ]

            ],
            'upload'         => [
                'cdnurl'    => '',
                'uploadurl' => "/ajax/upload",
                'bucket'    => "local",
                'maxsize'   => '10mb',
                'mimetype'  => 'jpg,png,bmp,jpeg,gif,zip,rar,xls,xlsx',
                'multipart' => [],
                'multiple'  => false
            ],
            'modulename'     => $route['module'],
            'controllername' => $route['controller'],
            'actionname'     => $route['action'],
            'jsname'         => 'backend/' . $route['controller'],
            'app_debug'      => 'ajax/upload',
            'moduleurl'      => '/' . trim($route['module'], '/'),
            'language'       => config('app.local'),
        ];
        $view->with('config', $config);
        $view->with('site', $config['site']);
        $view->with('fixedmenu', false);
        $view->with('referermenu', false);
        $view->with('navlist', '');
        $auth = new Auth();
        if ($auth->isLogin()) {
            $view->with('admin', $auth->getUserInfo());
        }

    }


}