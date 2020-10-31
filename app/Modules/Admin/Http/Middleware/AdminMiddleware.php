<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-10-19
 * Time: 16:36
 */

namespace App\Modules\Admin\Http\Middleware;


use App\Modules\Common\Library\Tree;
use App\Modules\Model\AuthGroup;

/**
 * 管理员管理
 * Class AdminMiddleware
 * @package App\Modules\Admin\Http\Middleware
 */
class AdminMiddleware
{

    protected $childrenGroupIds = [];

    protected $childrenAdminIds = [];

    public function handle($request, \Closure $next)
    {

        $this->childrenAdminIds = $request->auth->getChildrenAdminIds(true);
        $this->childrenGroupIds = $request->auth->getChildrenGroupIds(true);

        $groupList = AuthGroup::whereIn('id', $this->childrenGroupIds)->get()->toArray();
        Tree::instance()->init($groupList);
        $groupdata = [];
        if ($request->auth->isSuperAdmin()) {
            $result = Tree::instance()->getTreeList(Tree::instance()->getTreeArray(0));
            foreach ($result as $k => $v) {
                $groupdata[$v['id']] = $v['name'];
            }
        } else {
            $result = [];
            $groups = $request->auth->getGroups();
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
        view()->composer('*', function ($view) use ($groupdata) {
            $view->with('groupdata', $groupdata);
        });
        $request->childrenAdminIds = $this->childrenAdminIds;
        $request->childrenGroupIds = $this->childrenGroupIds;
        return $next($request);
    }
}