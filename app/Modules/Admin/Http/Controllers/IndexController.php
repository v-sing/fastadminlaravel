<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-04
 * Time: 16:03
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Admin\Http\Auth;

class IndexController extends Controller
{


    public function index()
    {


        $auth = new Auth();
        list($menulist, $navlist, $fixedmenu, $referermenu) = $auth->getSidebar([
            'dashboard' => 'hot',
            'addon'     => ['new', 'red', 'badge'],
            'auth/rule' => lang('Menu'),
            'general'   => ['new', 'purple'],
        ]);
        //        $field='login';
//        $key = array_keys(trans('admin::'.$field));
//
//        $array=array_combine($key, $key);
//        $file="./lang/{$field}.php";
// //缓存
//        $text='<?php return '.var_export($array,true).';';
//        if(false!==fopen($file,'w+')){
//            file_put_contents($file,$text);
//        }else{
//            echo '创建失败';
//        }


        return view('admin::index.index', [
            'menulist'    => $menulist,
            'navlist'     => $navlist,
            'fixedmenu'   => $fixedmenu,
            'referermenu' => $referermenu ,
        ]);
    }


}