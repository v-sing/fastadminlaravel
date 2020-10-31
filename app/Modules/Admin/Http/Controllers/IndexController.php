<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-04
 * Time: 16:03
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Modules\Admin\Http\Auth;
use App\Modules\Common\Controllers\BackendController;
use Illuminate\Http\Request;

class IndexController extends BackendController
{

    protected $noNeedRight=['index'];

    public function index(Request $request)
    {
        $auth = $request->auth;
        list($menulist, $navlist, $fixedmenu, $referermenu) = $auth->getSidebar([
            'dashboard' => 'hot',
            'addon'     => ['new', 'red', 'badge'],
            'auth/rule' => lang('Menu'),
            'general'   => ['new', 'purple'],
        ]);
        return view('admin::index.index', [
            'menulist'    => $menulist,
            'navlist'     => $navlist,
            'fixedmenu'   => $fixedmenu,
            'referermenu' => $referermenu,
        ]);
    }


}