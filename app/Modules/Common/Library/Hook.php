<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-09-27
 * Time: 09:20
 */

namespace App\Modules\Common\Library;


use Illuminate\Support\Facades\Log;

class Hook
{

    /**
     * @var array 标签
     */
    private static $tags = [];

    /**
     * 动态添加行为扩展到某个标签
     * @access public
     * @param  string $tag 标签名称
     * @param  mixed $behavior 行为名称
     * @param  bool $first 是否放到开头执行
     * @return void
     */
    public static function add($tag, $behavior, $first = false)
    {
        isset(self::$tags[$tag]) || self::$tags[$tag] = [];

        if (is_array($behavior) && !is_callable($behavior)) {
            if (!array_key_exists('_overlay', $behavior) || !$behavior['_overlay']) {
                unset($behavior['_overlay']);
                self::$tags[$tag] = array_merge(self::$tags[$tag], $behavior);
            } else {
                unset($behavior['_overlay']);
                self::$tags[$tag] = $behavior;
            }
        } elseif ($first) {
            array_unshift(self::$tags[$tag], $behavior);
        } else {
            self::$tags[$tag][] = $behavior;
        }
    }

    /**
     * 批量导入插件
     * @access public
     * @param  array $tags 插件信息
     * @param  boolean $recursive 是否递归合并
     * @return void
     */
    public static function import(array $tags, $recursive = true)
    {
        if ($recursive) {
            foreach ($tags as $tag => $behavior) {
                self::add($tag, $behavior);
            }
        } else {
            self::$tags = $tags + self::$tags;
        }
    }

    /**
     * 获取插件信息
     * @access public
     * @param  string $tag 插件位置(留空获取全部)
     * @return array
     */
    public static function get($tag = '')
    {
        if (empty($tag)) {
            return self::$tags;
        }

        return array_key_exists($tag, self::$tags) ? self::$tags[$tag] : [];
    }

    /**
     * 监听标签的行为
     * @access public
     * @param  string $tag 标签名称
     * @param  mixed $params 传入参数
     * @param  mixed $extra 额外参数
     * @param  bool $once 只获取一个有效返回值
     * @return mixed
     */
    public static function listen($tag, &$params = null, $extra = null, $once = false)
    {
        $results = [];

        foreach (static::get($tag) as $key => $name) {
            $results[$key] = self::exec($name, $tag, $params, $extra);

            // 如果返回 false，或者仅获取一个有效返回则中断行为执行
            if (false === $results[$key] || (!is_null($results[$key]) && $once)) {
                break;
            }
        }

        return $once ? end($results) : $results;
    }

    /**
     * 执行某个行为
     * @access public
     * @param  mixed $class 要执行的行为
     * @param  string $tag 方法名（标签名）
     * @param  mixed $params 传人的参数
     * @param  mixed $extra 额外参数
     * @return mixed
     */
    public static function exec($class, $tag = '', &$params = null, $extra = null)
    {
        app()->isLocal() && config('app.debug', 'time');

        $method = self::parseName($tag, 1, false);
        if ($class instanceof \Closure) {
            $result = call_user_func_array($class, [& $params, $extra]);
            $class  = 'Closure';
        } elseif (is_array($class)) {
            list($class, $method) = $class;

            $result = (new $class())->$method($params, $extra);
            $class  = $class . '->' . $method;
        } elseif (is_object($class)) {
            $result = $class->$method($params, $extra);
            $class  = get_class($class);
        } elseif (strpos($class, '::')) {
            $result = call_user_func_array($class, [& $params, $extra]);
        } else {
            $obj    = new $class();
            $method = ($tag && is_callable([$obj, $method])) ? $method : 'run';
            $result = $obj->$method($params, $extra);
        }
        return $result;
    }

    /**
     * 字符串命名风格转换
     * type 0 将 Java 风格转换为 C 的风格 1 将 C 风格转换为 Java 的风格
     * @access public
     * @param  string $name 字符串
     * @param  integer $type 转换类型
     * @param  bool $ucfirst 首字母是否大写（驼峰规则）
     * @return string
     */
    public static function parseName($name, $type = 0, $ucfirst = true)
    {
        if ($type) {
            $name = preg_replace_callback('/_([a-zA-Z])/', function ($match) {
                return strtoupper($match[1]);
            }, $name);

            return $ucfirst ? ucfirst($name) : lcfirst($name);
        }

        return strtolower(trim(preg_replace("/[A-Z]/", "_\\0", $name), "_"));
    }


}