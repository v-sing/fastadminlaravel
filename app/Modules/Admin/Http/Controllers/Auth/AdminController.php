<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-09-16
 * Time: 21:56
 */

namespace App\Modules\Admin\Http\Controllers\Auth;


use App\Modules\Admin\Http\Middleware\AdminMiddleware;
use App\Modules\Common\Controllers\BackendController;
use App\Modules\Common\Library\Random;
use App\Modules\Model\Admin;
use App\Modules\Model\AuthGroup;
use App\Modules\Model\AuthGroupAccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends BackendController
{
    protected $childrenGroupIds = [];
    protected $childrenAdminIds = [];

    public function _initialize()
    {
        parent::_initialize();
        //初始化数据
        $this->middleware(AdminMiddleware::class);

        $this->model = new Admin();
    }

    public function index(Request $request)
    {
        if ($request->isAjax()) {
            $childrenGroupIds = $request->childrenGroupIds;
            $groupName        = AuthGroup::whereIn('id', $childrenGroupIds)
                ->select('id', 'name')->get();
            $authGroupList    = AuthGroupAccess::whereIn('group_id', $childrenGroupIds)
                ->select('uid', 'group_id')
                ->get();
            $adminGroupName   = [];
            foreach ($authGroupList as $k => $v) {
                if (isset($groupName[$v->group_id]))
                    $adminGroupName[$v->uid][$v->group_id] = $groupName[$v->group_id]->name;
            }
            $groups = $request->auth->getGroups();
            foreach ($groups as $m => $n) {
                $adminGroupName[$request->auth->id][$n['id']] = $n['name'];
            }

            list($where, $sort, $order, $offset, $limit) = $this->buildparams();
            $total = $this->model
                ->where($where)
                ->whereIn('id', $request->childrenAdminIds)
                ->orderBy($sort, $order)
                ->count();

            $list = $this->model
                ->where($where)
                ->whereIn('id', $request->childrenAdminIds)
                ->select('*')
                ->orderBy($sort, $order)
                ->offset($offset)
                ->limit($limit)
                ->get();
            unset($v);
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


    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $params = $request->post("row");
            if ($params) {
                $params['salt']     = Random::alnum();
                $params['password'] = Hash::make($params['password'] . $params['salt']);
                $params['avatar']   = '/assets/img/avatar.png'; //设置新管理员默认头像。
                $this->Validator($params, [
                    'username' => 'required|max:50|unique:admins,username',
                    'email'    => 'required|email|unique:admins,email'
                ]);
                $result = Admin::insertGetId($params);
                if ($result === false) {
                    $this->error();
                }
                $group = $request->post("group");

                //过滤不允许的组别,避免越权
                $group   = array_intersect($request->childrenGroupIds, $group);
                $dataset = [];
                foreach ($group as $value) {
                    $dataset[] = ['uid' => $result, 'group_id' => $value];
                }
                DB::table((new AuthGroupAccess)->getTable())->insert($dataset);
                $this->success();
            }
            $this->error();
        }
        return $this->view();
    }

    public function edit(Request $request)
    {
        $ids   = $request->all('ids', '');
        $model = new Admin();
        $row   = $model->where('id', $ids)->first();
        if (!$row)
            $this->error(lang('No Results were found'));
        if ($request->isMethod('post')) {
            $params = $request->post("row");
            if ($params) {
                if ($params['password']) {
                    $params['salt']     = Random::alnum();
                    $params['password'] = Hash::make($params['password'] . $params['salt']);
                } else {
                    unset($params['password'], $params['salt']);
                }
                //这里需要针对username和email做唯一验证
                $this->Validator($params, [
                    'username' => 'required|max:50|unique:admins,username,' . $row->id,
                    'email'    => 'required|email|unique:admins,email,' . $row->id
                ]);
                $result = $row->where(['id' => $row->id])->update($params);
                if ($result === false) {
                    $this->error();
                }
                // 先移除所有权限
                AuthGroupAccess::query()->where('uid', $row->id)->delete();

                $group = $request->post("group");

                // 过滤不允许的组别,避免越权
                $group = array_intersect($request->childrenGroupIds, $group);

                $dataset = [];
                foreach ($group as $value) {
                    $dataset[] = ['uid' => $row->id, 'group_id' => $value];
                }
                DB::table((new AuthGroupAccess)->getTable())->insert($dataset);
                $this->success();
            }
            $this->error();
        }
        $grouplist = $request->auth->getGroups($row['id']);
        $groupids  = [];
        foreach ($grouplist as $k => $v) {
            $groupids[] = $v['id'];
        }
        $this->assign("row", $row);
        $this->assign("groupids", $groupids);
        return $this->view();
    }

    public function del(Request $request)
    {
        $ids = $request->post('ids');
        if ($ids) {
            // 避免越权删除管理员
            $childrenGroupIds = $request->childrenGroupIds;


            $adminList = Admin::whereIn('id', explode(',', $ids))->whereHas('authGroupAccess', function ($query) use ($childrenGroupIds) {
                $query->whereIn('group_id', $childrenGroupIds);
            })->get();
            if ($adminList) {
                $deleteIds = [];
                foreach ($adminList as $k => $v) {
                    $deleteIds[] = $v->id;
                }
                $deleteIds = array_diff($deleteIds, [$request->auth->id]);
                if ($deleteIds) {
                    Admin::destroy($deleteIds);
                    AuthGroupAccess::whereIn('uid', $deleteIds)->delete();
                    $this->success();
                }
            }
        }
        $this->error();
    }

}