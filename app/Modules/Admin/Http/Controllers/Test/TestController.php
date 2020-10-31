<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-10-30
 * Time: 18:15
 */

namespace App\Modules\Admin\Http\Controllers\Test;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index(Request $request)
    {
        dump($request);
        exit;

    }
}