<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-10-03
 * Time: 11:45
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Common\Library\Tree;
use App\Modules\Model\AuthGroup;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $model = null;
    protected $childrenGroupIds = [];
    protected $groupdata = [];

    public function _initialize($request)
    {
        $this->model = new AuthGroup();

        $this->childrenGroupIds = $request->auth()->getChildrenGroupIds(true);

        $groupList = AuthGroup::whereIn('id', $this->childrenGroupIds)->get()->toArray();
        Tree::instance()->init($groupList);
        $result = [];
        if ($request->auth()->isSuperAdmin()) {
            $result = Tree::instance()->getTreeList(Tree::instance()->getTreeArray(0));
        } else {
            $groups = $request->auth()->getGroups();
            foreach ($groups as $m => $n) {
                $result = array_merge($result, Tree::instance()->getTreeList(Tree::instance()->getTreeArray($n['pid'])));
            }
        }
        $groupName = [];
        foreach ($result as $k => $v) {
            $groupName[$v['id']] = $v['name'];
        }

        $this->groupdata = $groupName;
        $this->assignconfig("admin1", ['id' =>  $request->auth()->id, 'group_ids' =>  $request->auth()->getGroupIds()]);

        $this->assign('groupdata', $this->groupdata);
    }

    public function index(Request $request)
    {

        $this->_initialize($request);

        if ($request->isAjax()) {
            $list      = AuthGroup::whereIn('id', array_keys($this->groupdata))->get()->toArray();
            $groupList = [];
            foreach ($list as $k => $v) {
                $groupList[$v['id']] = $v;
            }
            $list = [];
            foreach ($this->groupdata as $k => $v) {
                if (isset($groupList[$k])) {
                    $groupList[$k]['name'] = $v;
                    $list[]                = $groupList[$k];
                }
            }
            $total  = count($list);
            $result = array("total" => $total, "rows" => $list);
            $this->json($result);
        }
        return $this->view();
    }

}