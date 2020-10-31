<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-10-19
 * Time: 15:21
 */

namespace App\Modules\Admin\Http\Middleware;


use App\Modules\Model\Config;

class BackendMiddleware
{


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        /**
         * 初始化
         */
        $request->_initialize();
        $config = Config::cache();
        config($config);
        $request->config         = $config;
        $request->filterpath     = str_replace($config['modulename'] . '/', '', $request->path());
        return $next($request);

    }

}