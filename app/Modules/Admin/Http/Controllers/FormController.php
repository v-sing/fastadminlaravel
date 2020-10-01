<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-10
 * Time: 16:24
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use FormBuilder\components\Validate;
use LaravelFormBuilder\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{


    public function index(Request $request)
    {

        $config = ['path' => public_path('download/excel/')];


        $writer  = new \Vtiful\Kernel\Excel($config);

        $filePath = $writer->fileName('tutorial01.xlsx', 'sheet1')
            ->header(['Item', 'Cost'])
            ->data([
                ['Rent', 1000],
                ['Gas',  100],
                ['Food', 300],
                ['Gym',  50],
            ])
            ->output();
dump($filePath);exit;
        return $this->view();
    }

}