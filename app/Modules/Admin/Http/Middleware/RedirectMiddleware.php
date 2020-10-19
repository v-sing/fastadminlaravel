<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-10-19
 * Time: 15:13
 */

namespace App\Modules\Admin\Http\Middleware;


class RedirectMiddleware
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
        // 定义是否Addtabs请求
        !defined('IS_ADDTABS') && define('IS_ADDTABS', $request->input("addtabs") ? TRUE : FALSE);
        // 定义是否Dialog请求
        !defined('IS_DIALOG') && define('IS_DIALOG', $request->input("dialog") ? TRUE : FALSE);
        // 定义是否AJAX请求
        !defined('IS_AJAX') && define('IS_AJAX', $request->isAjax());
        // 非选项卡时重定向
        if (!IS_AJAX && !IS_ADDTABS && !IS_DIALOG && $request->input("ref") == 'addtabs') {
            $url = preg_replace_callback("/([\?|&]+)ref=addtabs(&?)/i", function ($matches) {
                return $matches[2] == '&' ? $matches[1] : '';
            }, $request->url());
            if (config('admin.url_domain_deploy')) {
                if (stripos($url, $request->server('SCRIPT_NAME')) === 0) {
                    $url = substr($url, strlen($request->server('SCRIPT_NAME')));
                }
                $url = url($url, '', false);
            }
            return redirect(url('/admin/index'))->with(['referer' => $url]);
        }
        return $next($request);

    }
}