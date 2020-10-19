<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-10-19
 * Time: 15:13
 */

namespace App\Modules\Admin\Http\Middleware;


use App\Modules\Common\Library\Traits\Backend;
use App\Modules\Model\AdminLog;

/**
 * 视图全局输出
 * Class ViewMiddleware
 * @package App\Modules\Admin\Http\Middleware
 */
class ViewMiddleware
{
    use Backend;

    protected $auth = null;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {

        // 设置面包屑导航数据
        $breadcrumb = $request->auth->getBreadCrumb($request->filterpath);
        array_pop($breadcrumb);
        view()->composer('*', function ($view) use ($breadcrumb, $request) {
            $view->with('breadcrumb', $breadcrumb);
            $config                = $request->config;
            $config['admin']['id'] = $request->auth->id;
            $view->with('config', $config);
            $view->with('site', $config['site']);
            $view->with('fixedmenu', false);
            $view->with('referermenu', false);
            $view->with('navlist', '');
            $view->with('title', request()->auth()->getTitle());
            $view->with('auth', request()->auth());
            if (request()->auth()->isLogin()) {
                $view->with('admin', request()->auth()->getUserInfo());
            }
        });
        AdminLog::setTitle(lang(request()->auth()->getTitle()));
        return $next($request);

    }

}