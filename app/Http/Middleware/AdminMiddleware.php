<?php

namespace App\Http\Middleware;

use App\Modules\Admin\Http\Auth;
use App\Modules\Common\Library\Traits\Jump;
use App\Modules\Model\AdminLog;
use Closure;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class AdminMiddleware
{
    use Jump;
    protected $auth = null;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->auth = Auth::instance();
        if (!$this->auth->isLogin()) {
            $url = Session::get('referer');
            $url = $url ? $url : $request->url();
            $this->error(trans('admin::common.Please login first'), route('login', ['url' => urlencode($url)]));
        }

        $modulename     = config('modulename');
        $controllername = config('controllername');
        $actionname     = config('actionname');
//        $path           = $controllername . '/' . $actionname;
        $path = str_replace($modulename . '/', '', $request->path());
        if (!$this->auth->check($path)) {
            $this->error('You have no permission');
        }

        // 设置面包屑导航数据
        $breadcrumb = $this->auth->getBreadCrumb($path);

        array_pop($breadcrumb);
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
