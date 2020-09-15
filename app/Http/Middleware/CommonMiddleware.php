<?php

namespace App\Http\Middleware;

use App\Modules\Common\Repositories\ConfigRepositories;
use App\Modules\Model\Config;
use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class CommonMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //设置全局变量
        config(Config::cache());
        //设置模版
        view()->composer(
            '*',     //模板名
            'App\Modules\Common\Controllers\BackendController@viewInitData'    //方法名或者类中的方法
        );
        $response = $next($request);
        return $response;
    }
}
