<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-06-19
 * Time: 09:31
 */

namespace App\Modules\Repositories;


use App\Modules\Model\Panter;
use Illuminate\Http\Request;

class PanterRepositories
{

    public function list(Request $request)
    {

    }

    public function add(Request $request)
    {
        $data  = $request->only('namechinese');
        $model = Panter::firstOrNew(['panterid' => $request->input('id')]);
        $model->fill($data);
        $model->save();
    }
}