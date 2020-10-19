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
        $config = Config::cache();
        config($config);
        $request->auth           = $request->auth();
        $request->config         = $config;
        $request->modulename     = $config['modulename'];
        $request->controllername = $config['controllername'];
        $request->actionname     = $config['actionname'];
        $request->modulename     = $config['modulename'];
        $request->filterpath     = str_replace($config['modulename'] . '/', '', $request->path());
        return $next($request);

    }

}