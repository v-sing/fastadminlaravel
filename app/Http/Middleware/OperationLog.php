<?php

namespace App\Http\Middleware;

use App\Modules\Model\AdminLog;
use Closure;

class OperationLog
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
        if ($request->isMethod('post')) {
//            register_shutdown_function()//
        }
        return $next($request);
    }

    public function record()
    {

        AdminLog::record();
    }

}
