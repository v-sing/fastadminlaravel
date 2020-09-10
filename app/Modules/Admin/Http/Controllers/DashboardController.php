<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-08
 * Time: 11:47
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
         $seventtime = Date::parse('-7 day')->timestamp;
        $paylist    = $createlist = [];
        for ($i = 0; $i < 7; $i++) {
            $day              = date("Y-m-d", $seventtime + ($i * 86400));
            $createlist[$day] = mt_rand(20, 200);
            $paylist[$day]    = mt_rand(1, mt_rand(1, $createlist[$day]));
        }
        $add=[
            'totaluser'        => 35200,
            'totalviews'       => 219390,
            'totalorder'       => 32143,
            'totalorderamount' => 174800,
            'todayuserlogin'   => 321,
            'todayusersignup'  => 430,
            'todayorder'       => 2324,
            'unsettleorder'    => 132,
            'sevendnu'         => '80%',
            'sevendau'         => '32%',
            'paylist'          => $paylist,
            'createlist'       => $createlist,
        ];
        $this->assign($add);
       return $this->view();
        return view('admin::dashboard.index',$add);
    }

}