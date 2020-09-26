<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-09-16
 * Time: 21:56
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Common\Library\Tree;
use App\Modules\Model\Admin;
use App\Modules\Model\AdminLog;
use App\Modules\Model\AuthGroup;
use App\Modules\Model\AuthGroupAccess;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $childrenGroupIds = [];
    protected $childrenAdminIds = [];

    public function _initialize(Request $request)
    {

        $this->childrenAdminIds = $request->auth()->getChildrenAdminIds(true);
        $this->childrenGroupIds = $request->auth()->getChildrenGroupIds(true);

        $groupList = AuthGroup::whereIn('id', $this->childrenGroupIds)->get()->toArray();
        Tree::instance()->init($groupList);
        $groupdata = [];
        if ($request->auth()->isSuperAdmin()) {
            $result = Tree::instance()->getTreeList(Tree::instance()->getTreeArray(0));
            foreach ($result as $k => $v) {
                $groupdata[$v['id']] = $v['name'];
            }
        } else {
            $result = [];
            $groups = $request->auth()->getGroups();
            foreach ($groups as $m => $n) {
                $childlist = Tree::instance()->getTreeList(Tree::instance()->getTreeArray($n['id']));
                $temp      = [];
                foreach ($childlist as $k => $v) {
                    $temp[$v['id']] = $v['name'];
                }
                $result[lang($n['name'])] = $temp;
            }
            $groupdata = $result;
        }
        $this->assign('groupdata', $groupdata);
    }

    public function index(Request $request)
    {
//        dump(AdminLog::with(['admin'])->get());exit;

        $this->_initialize($request);

        if ($request->isAjax()) {

            $childrenGroupIds = $this->childrenGroupIds;
            $groupName        = AuthGroup::whereIn('id', $childrenGroupIds)
                ->select('id', 'name')->get();
            $authGroupList    = AuthGroupAccess::whereIn('group_id', $childrenGroupIds)
                ->select('uid', 'group_id')
                ->get();
            $adminGroupName   = [];
            foreach ($authGroupList as $k => $v) {
                if (isset($groupName[$v->group_id]))
                    $adminGroupName[$v->uid][$v->group_id] = $groupName[$v->group_id];
            }
            $groups = $request->auth()->getGroups();
            foreach ($groups as $m => $n) {
                $adminGroupName[$request->auth()->id][$n['id']] = $n['name'];
            }
            list($where, $sort, $order, $offset, $limit) = $this->buildparams(new Admin());
            $total = Admin::
            where($where)
                ->whereIn('id', $this->childrenAdminIds)
                ->orderBy($sort, $order)
                ->count();

            $list = Admin::
            where($where)
                ->whereIn('id', $this->childrenAdminIds)
                ->select('*')
                ->orderBy($sort, $order)
                ->offset($offset)
                ->limit($limit)
                ->get();
            foreach ($list as $k => &$v) {
                $groups         = isset($adminGroupName[$v->id]) ? $adminGroupName[$v->id] : [];
                $v->groups      = implode(',', array_keys($groups));
                $v->groups_text = implode(',', array_values($groups));
            }

            $result = array("total" => $total, "rows" => $list);
            $this->ajaxReturn($result);
        }

        return $this->view();
    }


}