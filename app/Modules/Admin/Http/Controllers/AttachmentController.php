<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-09-15
 * Time: 22:55
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Model\Attachment;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{


    public function index(Request $request)
    {
        $mimetypeQuery = [];
        if ($request->isAjax()) {
            $filter    = $request->get('filter');
            $filterArr = (array)json_decode($filter, TRUE);
            if (isset($filterArr['mimetype']) && stripos($filterArr['mimetype'], ',') !== false) {
                $request->merge(['filter' => json_encode(array_merge($filterArr, ['mimetype' => '']))]);
                $mimetypeQuery = function ($query) use ($filterArr) {
                    $mimetypeArr = explode(',', $filterArr['mimetype']);
                    foreach ($mimetypeArr as $index => $item) {
                        $query->whereOr('mimetype', 'like', '%' . $item . '%');
                    }
                };
            }
            list($where, $sort, $order, $offset, $limit) = $this->buildparams(new Attachment());
            $total = Attachment::
            where($mimetypeQuery)
                ->where($where)
                ->orderby($sort, $order)
                ->count();

            $list = Attachment::
            where($mimetypeQuery)
                ->where($where)
                ->orderby($sort, $order)
                ->offset($offset)
                ->limit($limit)
                ->get();

            $cdnurl = preg_replace("/\/(\w+)\.php$/i", '', $request->root());
            foreach ($list as $k => &$v) {
                $v['fullurl'] = $v['url'];
            }
            unset($v);
            $result   = array("total" => $total, "rows" => $list);
            $response = response()->json($result);
            throw  new  HttpResponseException($response);

        } else {
            return $this->view();
        }
    }


}