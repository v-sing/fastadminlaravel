<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-10-19
 * Time: 14:28
 */

namespace App\Modules\Admin\Http\Middleware;

use App\Modules\Common\Library\Traits\Backend;
use Illuminate\Support\Facades\Session;

/**
 * 验证登陆权限
 * Class LoginMiddleware
 * @package App\Modules\Admin\Http\Middleware
 */
class LoginMiddleware
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
        if (!$request->auth->isLogin()) {
            $url = Session::get('referer');
            $url = $url ? $url : $request->url();
            $this->error(trans('admin::common.Please login first'), route('login', ['url' => urlencode($url)]));
        }
        return $next($request);

    }
}