<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-10-03
 * Time: 11:45
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Modules\Common\Controllers\BackendController;
use Illuminate\Http\Request;
use App\Modules\Model\AdminLog as LogModel;

class AdminlogController extends BackendController
{


    public function index(Request $request)
    {

        if ($request->isAjax()) {

            list($where, $sort, $order, $offset, $limit) = $this->buildparams(LogModel::class);
            $mode  = LogModel::query();
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

    public function del(Request $request)
    {
        $ids = $request->post('ids');
        LogModel::whereIn('id', explode(',', $ids))->delete();
        $this->success();
    }

    public function detail(Request $request)
    {
        $ids  = $request->get('ids');
        $info = LogModel::where('id', $ids)->first();

        $this->assign('row', $info->toArray());

        return $this->view();
    }

}