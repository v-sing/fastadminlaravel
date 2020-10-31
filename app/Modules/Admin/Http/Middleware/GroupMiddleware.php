<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-10-19
 * Time: 16:48
 */

namespace App\Modules\Admin\Http\Middleware;


use App\Modules\Common\Library\Tree;
use App\Modules\Model\AuthGroup;

class GroupMiddleware
{
    protected $childrenGroupIds = [];

    public function handle($request, \Closure $next)
    {

        $this->childrenGroupIds = $request->auth->getChildrenGroupIds(true);
        $groupList              = AuthGroup::whereIn('id', $this->childrenGroupIds)->get()->toArray();
        Tree::instance()->init($groupList);
        $result = [];
        if ($request->auth->isSuperAdmin()) {
            $result = Tree::instance()->getTreeList(Tree::instance()->getTreeArray(0));
        } else {
            $groups = $request->auth->getGroups();
            foreach ($groups as $m => $n) {
                $result = array_merge($result, Tree::instance()->getTreeList(Tree::instance()->getTreeArray($n['pid'])));
            }
        }
        $groupName = [];
        foreach ($result as $k => $v) {
            $groupName[$v['id']] = $v['name'];
        }

        view()->composer('*', function ($view) use ($groupName, $request) {
            $view->with('groupdata', $groupName);
            $view->with('groups', ['id' => $request->auth->id, 'group_ids' => $request->auth->getGroupIds()]);

        });
        $request->childrenGroupIds = $this->childrenGroupIds;
        $request->groupdata        = $groupName;
        return $next($request);
    }

}