<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-10-19
 * Time: 14:28
 */

namespace App\Modules\Admin\Http\Middleware;

use App\Modules\Common\Library\Traits\Backend;

/**
 * 验证菜单权限
 * Class AuthMiddleware
 * @package App\Modules\Admin\Http\Middleware
 */
class AuthMiddleware
{
    use Backend;


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {

        $path = preg_replace('/^' . $request->modulename . '\//', '', $request->path());
        if (!$request->auth->check($path)) {
            $this->error(lang('You have no permission'));
        }
        return $next($request);

    }

}