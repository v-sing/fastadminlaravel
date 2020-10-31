<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-10-31
 * Time: 12:55
 */

namespace App\Modules\Common\Library\Mixins;


class RouteMixin
{
    /**
     * 解析URL的pathinfo参数和变量
     * @access private
     * @param string $url URL地址
     * @return array
     */
    public function parseUrlPath()
    {
        return function ($url) {
            // 分隔符替换 确保路由定义使用统一的分隔符
            $url = str_replace('|', '/', $url);
            $url = trim($url, '/');
            $var = [];
            if (false !== strpos($url, '?')) {
                // [模块/控制器/操作?]参数1=值1&参数2=值2...
                $info = parse_url($url);
                $path = explode('/', $info['path']);
                parse_str($info['query'], $var);
            } elseif (strpos($url, '/')) {
                // [模块/控制器/操作]
                $path = explode('/', $url);
            } else {
                $path = [$url];
            }
            return [$path, $var];
        };

    }

}