<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-01
 * Time: 11:38
 */

use App\Modules\Common\Library\Form;
use App\Modules\Common\Library\Tree;
use App\Modules\Admin\Http\Auth;

if (!function_exists('lang')) {

    function lang($name)
    {
        $key   = config('modulename') . '::' . config('controllername');
        $trans = $key . '.' . $name;
        $value = trans($trans);
        if ($value == $trans) {
            $trans = config('modulename') . '::common.' . $name;
            $value = trans($trans);
            if ($value == $trans) {
                $value = $name;
            }
        }
        return $value;
    }

}


if (!function_exists('jsonp')) {
    /**
     *
     * @param $callback
     * @param array $data
     * @param int $status
     * @param array $headers
     * @param int $options
     * @return \Illuminate\Http\JsonResponse
     */
    function jsonp($callback, $data = [], $status = 200, array $headers = [], $options = 0)
    {
        return response()->jsonp($callback, $data, $status, $headers, $options);
    }
}


if (!function_exists('getRealRoute')) {
    function getRealRoute($real = '')
    {
        $app = app();
        if ($real == '') {
            $real = ltrim(\request()->getPathInfo(), '/');
        }
        $routes = $app->routes->getRoutes();
        $uri    = array_column(toArray($routes), 'uri');
        $action = array_column(toArray($routes), 'action');
        foreach ($action as $k => $v) {
            if (!isset($v['prefix']) || is_null($v['prefix'])) {
                $action[$k]['prefix'] = 'web';
            }
            if (!isset($v['controller'])) {
                $action[$k]['controller'] = '';
            }
        }
        $module     = array_column($action, 'prefix');
        $controller = array_column($action, 'controller');

        $array = [];
        foreach ($controller as $key => $value) {
            if (preg_match('/([\w]+)Controller@(.*?)$/', $value, $matches)) {
                $array[$key] = [
                    'uri'        => $uri[$key],
                    'module'     => $module[$key],
                    'controller' => strtolower($matches[1]),
                    'action'     => strtolower($matches[2]),
                    'realPath'   => $module[$key] . '/' . strtolower($matches[1]) . '/' . strtolower($matches[2])
                ];
            } else {
                $array[$key] = [
                    'uri'        => $uri[$key],
                    'module'     => $module[$key],
                    'controller' => '',
                    'action'     => '',
                    'realPath'   => $module[$key] . $key
                ];
            }
        }
        $index = array_search($real, $uri);
        return $array[$index];

    }

}

if (!function_exists('toArray')) {
    /**
     * 对象转数组
     * @param $data
     * @return mixed
     */
    function toArray($array)
    {
        if (is_object($array)) {
            $array = json_decode(json_encode($array, true), true);
        }
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                $array[$key] = toArray($value);
            }
        }
        return $array;
    }
}

if (!function_exists('build_heading')) {

    /**
     * 生成页面Heading
     *
     * @param string $path 指定的path
     * @return string
     */
    function build_heading($path = NULL, $container = TRUE)
    {

        $title = $content = '';
        if (is_null($path)) {
            $action     = config('actionname');
            $controller = str_replace('.', '/', config('controllername'));
            $path       = strtolower($controller . ($action && $action != 'index' ? '/' . $action : ''));
        }
        // 根据当前的URI自动匹配父节点的标题和备注
        $data = \App\Modules\Model\AuthRule::query()->where(['name' => $path])->first();
        if ($data) {
            $title   = lang($data->title);
            $content = lang($data->remark);
        }
        if (!$content)
            return '';
        $result = '<div class="panel-lead"><em>' . $title . '</em>' . $content . '</div>';
        if ($container) {
            $result = '<div class="panel-heading">' . $result . '</div>';
        }
        return $result;
    }
}

if (!function_exists('build_toolbar')) {

    /**
     * 生成表格操作按钮栏
     * @param array $btns 按钮组
     * @param array $attr 按钮属性值
     * @return string
     */
    function build_toolbar($btns = NULL, $attr = [])
    {
        $auth       = Auth::instance();
        $controller = str_replace('.', '/', strtolower(config('controllername')));
        $btns       = $btns ? $btns : ['refresh', 'add', 'edit', 'del', 'import'];
        $btns       = is_array($btns) ? $btns : explode(',', $btns);
        $index      = array_search('delete', $btns);
        if ($index !== FALSE) {
            $btns[$index] = 'del';
        }
        $btnAttr = [
            'refresh' => ['javascript:;', 'btn btn-primary btn-refresh', 'fa fa-refresh', '', lang('Refresh')],
            'add'     => ['javascript:;', 'btn btn-success btn-add', 'fa fa-plus', lang('Add'), lang('Add')],
            'edit'    => ['javascript:;', 'btn btn-success btn-edit btn-disabled disabled', 'fa fa-pencil', lang('Edit'), lang('Edit')],
            'del'     => ['javascript:;', 'btn btn-danger btn-del btn-disabled disabled', 'fa fa-trash', lang('Delete'), lang('Delete')],
            'import'  => ['javascript:;', 'btn btn-danger btn-import', 'fa fa-upload', lang('Import'), lang('Import')],
        ];
        $btnAttr = array_merge($btnAttr, $attr);
        $html    = [];
        foreach ($btns as $k => $v) {
            //如果未定义或没有权限
            if (!isset($btnAttr[$v]) || ($v !== 'refresh' && !$auth->check("{$controller}/{$v}"))) {
                continue;
            }
            list($href, $class, $icon, $text, $title) = $btnAttr[$v];
            $extend = $v == 'import' ? 'id="btn-import-file" data-url="ajax/upload" data-mimetype="csv,xls,xlsx" data-multiple="false"' : '';
            $html[] = '<a href="' . $href . '" class="' . $class . '" title="' . $title . '" ' . $extend . '><i class="' . $icon . '"></i> ' . $text . '</a>';
        }
        return implode(' ', $html);
    }
}

if (!function_exists('insertToArray')) {

    /**
     * sql文件转数组
     * @param $insert
     * @return array|false
     */
    function insertToArray($insert)
    {
        list($column, $value) = explode('values', $insert);
        $column = explode(',', strtolower(trim(trim(trim($column), 'Insert into EXPORT_TABLE ('), ')')));
        $value  = explode(',', str_replace(['null', "'"], ['', ''], trim(trim(trim($value), ');'), '(')));
        if (count($column) != count($value)) {
            return false;
        }
        $data = array_combine($column, $value);
        return $data;
    }


}

if (!function_exists('batchData')) {

    /**
     * 批量插入sql
     * @param $data
     * @param $table
     * @param string $condition
     * @return string
     */
    function batchData($data, $table, $condition = 'customid')
    {

        $where = array_column($data, $condition);
        foreach ($where as $index => $item) {
            $where[$index] = "'" . $item . "'";
        }
        $set = [];
        foreach ($data as $index => $item) {
            foreach ($item as $column => $value) {
                if ($column != $condition) {
                    $set[$column][] = " WHEN '{$item[$condition]}' THEN '$value' ";
                }
            }
        }
        $condition = strtoupper($condition);
        $setting   = [];
        foreach ($set as $column => $item) {
            $column    = strtoupper($column);
            $setting[] = " $column =case $condition " . implode(' ', $item) . " END ";

        }
        $column    = implode(',', $setting);
        $whereIn   = implode(',', $where);
        $updateSql = " update {$table} set " . $column . " where {$condition} in ({$whereIn})";
        return $updateSql;

    }
}


if (!function_exists('loadRoutesFile')) {
    /**
     * 读取文件
     * @param $path
     * @return array
     */
    function loadRoutesFile($path)
    {
        $allRoutesFilePath = array();
        foreach (glob($path) as $file) {
            if (is_dir($file)) {
                $allRoutesFilePath = array_merge($allRoutesFilePath, loadRoutesFile($file . '/*'));
            } else {
                $allRoutesFilePath[] = $file;
            }
        }
        return $allRoutesFilePath;
    }
}


if (!function_exists('build_select')) {

    /**
     * 生成下拉列表
     * @param string $name
     * @param mixed $options
     * @param mixed $selected
     * @param mixed $attr
     * @return string
     */
    function build_select($name, $options, $selected = [], $attr = [])
    {
        $options  = is_array($options) ? $options : explode(',', $options);
        $selected = is_array($selected) ? $selected : explode(',', $selected);
        return Form::select($name, $options, $selected, $attr);
    }
}

if (!function_exists('build_radios')) {

    /**
     * 生成单选按钮组
     * @param string $name
     * @param array $list
     * @param mixed $selected
     * @return string
     */
    function build_radios($name, $list = [], $selected = null)
    {
        $html     = [];
        $selected = is_null($selected) ? key($list) : $selected;
        $selected = is_array($selected) ? $selected : explode(',', $selected);
        foreach ($list as $k => $v) {
            $html[] = sprintf(Form::label("{$name}-{$k}", "%s {$v}"), Form::radio($name, $k, in_array($k, $selected), ['id' => "{$name}-{$k}"]));
        }
        return '<div class="radio">' . implode(' ', $html) . '</div>';
    }
}

if (!function_exists('build_checkboxs')) {

    /**
     * 生成复选按钮组
     * @param string $name
     * @param array $list
     * @param mixed $selected
     * @return string
     */
    function build_checkboxs($name, $list = [], $selected = null)
    {
        $html     = [];
        $selected = is_null($selected) ? [] : $selected;
        $selected = is_array($selected) ? $selected : explode(',', $selected);
        foreach ($list as $k => $v) {
            $html[] = sprintf(Form::label("{$name}-{$k}", "%s {$v}"), Form::checkbox($name, $k, in_array($k, $selected), ['id' => "{$name}-{$k}"]));
        }
        return '<div class="checkbox">' . implode(' ', $html) . '</div>';
    }
}


if (!function_exists('build_category_select')) {

    /**
     * 生成分类下拉列表框
     * @param string $name
     * @param string $type
     * @param mixed $selected
     * @param array $attr
     * @param array $header
     * @return string
     */
    function build_category_select($name, $type, $selected = null, $attr = [], $header = [])
    {
        $tree = Tree::instance();
        $tree->init(Category::getCategoryArray($type), 'pid');
        $categorylist = $tree->getTreeList($tree->getTreeArray(0), 'name');
        $categorydata = $header ? $header : [];
        foreach ($categorylist as $k => $v) {
            $categorydata[$v['id']] = $v['name'];
        }
        $attr = array_merge(['id' => "c-{$name}", 'class' => 'form-control selectpicker'], $attr);
        return build_select($name, $categorydata, $selected, $attr);
    }
}
