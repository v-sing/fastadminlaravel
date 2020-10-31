<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-10-03
 * Time: 11:45
 */

namespace App\Modules\Admin\Http\Controllers\Auth;


use App\Modules\Admin\Http\Middleware\GroupMiddleware;
use App\Modules\Common\Controllers\BackendController;
use App\Modules\Common\Library\Tree;
use App\Modules\Model\AuthGroup;
use App\Modules\Model\AuthGroupAccess;
use App\Modules\Model\AuthRule;
use Illuminate\Http\Request;

class GroupController extends BackendController
{

    protected $noNeedRight = ['roletree'];

    public function _initialize()
    {
        parent::_initialize();
        $this->model = new AuthGroup();
        $this->middleware(GroupMiddleware::class);
    }

    public function index(Request $request)
    {
        if ($request->isAjax()) {
            $list      = AuthGroup::whereIn('id', array_keys($request->groupdata))->get()->toArray();
            $groupList = [];
            foreach ($list as $k => $v) {
                $groupList[$v['id']] = $v;
            }
            $list = [];
            foreach ($request->groupdata as $k => $v) {
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


    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $params          = $request->post("row", []);
            $params['rules'] = explode(',', $params['rules']);
            if (!in_array($params['pid'], $request->childrenGroupIds)) {
                $this->error(lang('The parent group can not be its own child'));
            }
            $parentmodel = AuthGroup::query()->where('id', $params['pid'])->first();
            if (!$parentmodel) {
                $this->error(lang('The parent group can not found'));
            }
            // 父级别的规则节点
            $parentrules = explode(',', $parentmodel->rules);
            // 当前组别的规则节点
            $currentrules = $request->auth->getRuleIds();
            $rules        = $params['rules'];
            // 如果父组不是超级管理员则需要过滤规则节点,不能超过父组别的权限
            $rules = in_array('*', $parentrules) ? $rules : array_intersect($parentrules, $rules);
            // 如果当前组别不是超级管理员则需要过滤规则节点,不能超当前组别的权限
            $rules           = in_array('*', $currentrules) ? $rules : array_intersect($currentrules, $rules);
            $params['rules'] = implode(',', $rules);
            if ($params) {
                $parentmodel->insert($params);
                $this->success();
            }
            $this->error();
        }
        return $this->view();

    }

    public function edit(Request $request)
    {

        $ids = $request->get('ids');
        $row = AuthGroup::query()->where('id', $ids)->≈();
        if (!$row) {
            $this->error(lang('No Results were found'));
        }
        if ($request->isMethod('post')) {
            $params = $request->post("row", []);
            // 父节点不能是它自身的子节点
            if (!in_array($params['pid'], $request->childrenGroupIds)) {
                $this->error(lang('The parent group can not be its own child'));
            }
            $params['rules'] = explode(',', $params['rules']);

            $parentmodel = AuthGroup::query()->where('id', $params['pid'])->first();
            if (!$parentmodel) {
                $this->error(lang('The parent group can not found'));
            }
            // 父级别的规则节点
            $parentrules = explode(',', $parentmodel->rules);
            // 当前组别的规则节点
            $currentrules = $request->auth->getRuleIds();
            $rules        = $params['rules'];
            // 如果父组不是超级管理员则需要过滤规则节点,不能超过父组别的权限
            $rules = in_array('*', $parentrules) ? $rules : array_intersect($parentrules, $rules);
            // 如果当前组别不是超级管理员则需要过滤规则节点,不能超当前组别的权限
            $rules           = in_array('*', $currentrules) ? $rules : array_intersect($currentrules, $rules);
            $params['rules'] = implode(',', $rules);
            if ($params) {
                $model  = new AuthGroup();
                $result = $model->where('id', $ids)->update($params);
                $this->success();
            }
            $this->error();
        }
        $this->assign("row", $row);
        return $this->view();
    }

    public function del(Request $request)
    {

        $ids       = $request->post('ids');
        $ids       = explode(',', $ids);
        $grouplist = $request->auth->getGroups();
        $group_ids = array_map(function ($group) {
            return $group['id'];
        }, $grouplist);
        // 移除掉当前管理员所在组别
        $ids = array_diff($ids, $group_ids);

        // 循环判断每一个组别是否可删除
        $grouplist        = AuthGroup::query()->whereIn('id', $ids)->get();
        $groupaccessmodel = new AuthGroupAccess();
        foreach ($grouplist as $k => $v) {
            // 当前组别下有管理员
            $groupone = $groupaccessmodel->where('group_id', $v['id'])->first();
            if ($groupone) {
                $ids = array_diff($ids, [$v['id']]);
                continue;
            }
            // 当前组别下有子组别
            $groupone = AuthGroup::query()->where('pid', $v['id'])->first();
            if ($groupone) {
                $ids = array_diff($ids, [$v['id']]);
                continue;
            }
        }
        if (!$ids) {
            $this->error(lang('You can not delete group that contain child group and administrators'));
        }
        $count = AuthGroup::whereIn('id', $ids)->delete();
        if ($count) {
            $this->success();
        }
    }

    /**
     * 读取角色权限树
     *
     * @internal
     */
    public function roletree(Request $request)
    {
        $model             = new AuthGroup();
        $id                = $request->post("id");
        $pid               = $request->post("pid");
        $parentGroupModel  = $model->where('id', $pid)->first();
        $currentGroupModel = null;
        if ($id) {
            $currentGroupModel = $model->where('id', $id)->first();
        }
        if (($pid || $parentGroupModel) && (!$id || $currentGroupModel)) {
            $id       = $id ? $id : null;
            $ruleList = AuthRule::query()->orderBy('weigh', 'desc')->orderBy('id', 'asc')->get()->toArray();
            //读取父类角色所有节点列表
            $parentRuleList = [];
            if (in_array('*', explode(',', $parentGroupModel->rules))) {
                $parentRuleList = $ruleList;
            } else {
                $parentRuleIds = explode(',', $parentGroupModel->rules);
                foreach ($ruleList as $k => $v) {
                    if (in_array($v['id'], $parentRuleIds)) {
                        $parentRuleList[] = $v;
                    }
                }
            }
            $ruleTree  = new Tree();
            $groupTree = new Tree();
            //当前所有正常规则列表
            $ruleTree->init($parentRuleList);
            //角色组列表
            $groupTree->init($model->whereIn('id', $request->childrenGroupIds)->select()->toArray());

            //读取当前角色下规则ID集合
            $adminRuleIds = $request->auth->getRuleIds();
            //是否是超级管理员
            $superadmin = $request->auth->isSuperAdmin();
            //当前拥有的规则ID集合
            $currentRuleIds = $id ? explode(',', $currentGroupModel->rules) : [];
            if (!$id || !in_array($pid, $request->childrenGroupIds) || !in_array($pid, $groupTree->getChildrenIds($id, true))) {
                $parentRuleList = $ruleTree->getTreeList($ruleTree->getTreeArray(0), 'name');
                $hasChildrens   = [];
                foreach ($parentRuleList as $k => $v) {
                    if ($v['haschild']) {
                        $hasChildrens[] = $v['id'];
                    }
                }
                $parentRuleIds = array_map(function ($item) {
                    return $item['id'];
                }, $parentRuleList);
                $nodeList      = [];
                foreach ($parentRuleList as $k => $v) {
                    if (!$superadmin && !in_array($v['id'], $adminRuleIds)) {
                        continue;
                    }
                    if ($v['pid'] && !in_array($v['pid'], $parentRuleIds)) {
                        continue;
                    }
                    $state      = array('selected' => in_array($v['id'], $currentRuleIds) && !in_array($v['id'], $hasChildrens));
                    $nodeList[] = array('id' => $v['id'], 'parent' => $v['pid'] ? $v['pid'] : '#', 'text' => lang($v['title']), 'type' => 'menu', 'state' => $state);
                }
                $this->success('', null, $nodeList);
            } else {
                $this->error(lang('Can not change the parent to child'));
            }
        } else {
            $this->error(lang('Group not found'));
        }
    }
}