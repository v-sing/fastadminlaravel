<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-09
 * Time: 20:08
 */

namespace App\Modules\Common\Library\Traits;


use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

Trait Jump
{
    private $assign = [];

    protected $layout = 'admin::layouts.site';

    /**
     * @param string $msg
     * @param null $url
     * @param string $data
     * @param int $wait
     * @param array $header
     */
    protected function success($msg = '', $url = null, $data = '', $wait = 3, array $header = [])
    {

        if (is_null($url)) {
            $url = Request::ajax() ? '' : 'javascript:history.back(-1);';
        } elseif ('' !== $url && !strpos($url, '://') && 0 !== strpos($url, '/')) {
            $url = url($url);
        }
        $type     = $this->getResponseType();
        $result   = [
            'code' => 1,
            'msg'  => $msg,
            'data' => $data,
            'url'  => $url,
            'wait' => $wait,
        ];
        $response = response();
        switch ($type) {
            case "json":
                $response = response()->json($result);
                break;
            case "jsonp":
                $response = response()->jsonp('callback', $result)->setCallback(request()->input('callback'));
                break;
            case "blade":
                $response = response()->view("admin::template.message", $result);
                break;
        }

        throw  new  HttpResponseException($response);
    }

    /**
     * @param string $msg
     * @param null $url
     * @param string $data
     * @param int $wait
     * @param array $header
     */
    protected function error($msg = '', $url = null, $data = '', $wait = 3, array $header = [])
    {
        if (is_null($url)) {
            $url = Request::ajax() ? '' : 'javascript:history.back(-1);';
        } elseif ('' !== $url && !strpos($url, '://') && 0 !== strpos($url, '/')) {
            $url = url($url);
        }
        $type     = $this->getResponseType();
        $result   = [
            'code' => 0,
            'msg'  => $msg,
            'data' => $data,
            'url'  => $url,
            'wait' => $wait,
        ];
        $response = response();
        switch ($type) {
            case "json":
                $response = response()->json($result);
                break;
            case "jsonp":
                $response = response()->jsonp('callback', $result)->setCallback(request()->input('callback'));
                break;
            case "blade":
                $response = response()->view("admin::template.message", $result);
                break;
        }

        throw  new  HttpResponseException($response);

    }

    /**
     * 获取当前的 response 输出类型
     * @access protected
     * @return string
     */
    protected function getResponseType()
    {
        return Request::isAjax()
            ? config('extend.default_ajax_return')
            : config('extend.default_return_type');
    }

    /**
     * @param $name
     * @param null $value
     */
    protected function assign($name, $value = null)
    {
        if (is_null($value) && is_array($name)) {
            $this->assign = array_merge($this->assign, $name);
        } else {
            $this->assign[$name] = $value;
        }
        return true;
    }

    /**
     * 使用layout时用
     * @param null $view
     * @return mixed
     */
    protected function view($view = null)
    {
        if (is_null($view)) {
            $view = config('modulename') . "::" . config('controllername') . '.' . config('actionname');
        }
        return View::make($this->layout)->nest('layouts', $view, $this->assign);

    }

    protected function  json($data)
    {
        $response = response()->json($data);
        throw  new  HttpResponseException($response);
    }
}