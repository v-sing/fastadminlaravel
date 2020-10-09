<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-09
 * Time: 20:08
 */

namespace App\Modules\Common\Library\Traits;


use App\Modules\Model\Config;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

Trait Jump
{

    /**
     * 是否开启数据限制
     * 支持auth/personal
     * 表示按权限判断/仅限个人
     * 默认为禁用,若启用请务必保证表中存在admin_id字段
     */
    protected $dataLimit = false;

    private $assign = [];

    protected $layout = 'admin::layouts.site';

    protected $searchFields = [];
    protected $relationSearch = [];

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
            $url = Request::ajax() || Request::isMethod('post') ? '' : 'javascript:history.back(-1);';
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
        return Request::isAjax() || Request::isMethod('post')
            ? config('extend.default_ajax_return')
            : config('extend.default_return_type');
    }

    /**
     * @param $name
     * @param null $value
     * @return bool
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

    protected function assignconfig($name, $value = null)
    {
        $config = Config::cache();
        if (is_null($value) && is_array($name)) {
            foreach ($name as $field => $item) {
                if (isset($config[$field])) {
                    $config[$field] = array_merge($config[$field], $item);
                } else {
                    $config = array_merge($config, [$field => $item]);
                }
            }
        } else {
            if (isset($config[$name])) {
                $config[$name] = array_merge($config[$name], $value);
            } else {
                $config = array_merge($config, [$name => $value]);
            }

        }
        $this->assign['config'] = $config;
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

    protected function json($data)
    {
        $response = response()->json($data);
        throw  new  HttpResponseException($response);
    }

    protected function failedValidation($validator)
    {
        $error = $validator->errors()->first();

    }

    protected function Validator($data, array $rules,
                                 array $messages = [], array $customAttributes = [])
    {

        $validator = Validator::make($data, $rules, $messages, $customAttributes);
        if ($validator->fails()) {
            $this->error($validator->errors()->first());
        }
    }

    /**
     * 获取数据限制的管理员ID
     * 禁用数据限制时返回的是null
     * @return mixed
     */
    protected function getDataLimitAdminIds()
    {
        if (!$this->dataLimit) {
            return null;
        }
        if (\request()->auth()->isSuperAdmin()) {
            return null;
        }
        $adminIds = [];
        if (in_array($this->dataLimit, ['auth', 'personal'])) {
            $adminIds = $this->dataLimit == 'auth' ? \request()->auth()->getChildrenAdminIds(true) : [\request()->auth()->id];
        }
        return $adminIds;
    }

    /**
     * 生成查询所需要的条件,排序方式
     * @param mixed $searchfields 快速查询的字段
     * @param boolean $relationSearch 是否关联查询
     * @param boolean $model 当前使用的主表model
     * @return array
     */
    protected function buildparams($model, $searchfields = null, $relationSearch = null)
    {
        $model          = is_null($model) ? $this->model : $model;
        $searchfields   = is_null($searchfields) ? $this->searchFields : $searchfields;
        $relationSearch = is_null($relationSearch) ? $this->relationSearch : $relationSearch;
        $search         = \request()->get("search", '');
        $filter         = \request()->get("filter", '');
        $op             = \request()->get("op", '', 'trim');
        $sort           = \request()->get("sort", "id");
        $order          = \request()->get("order", "DESC");
        $offset         = \request()->get("offset", 0);
        $limit          = \request()->get("limit", 0);
        $filter         = (array)json_decode($filter, TRUE);
        $op             = (array)json_decode($op, TRUE);
        $filter         = $filter ? $filter : [];
        $where          = [];
        $tableName      = '';
        if ($relationSearch) {
            if (!empty($model)) {
                $name      = parseName(basename(str_replace('\\', '/', get_class($model))));
                $tableName = $name . '.';
            }
            $sortArr = explode(',', $sort);
            foreach ($sortArr as $index => & $item) {
                $item = stripos($item, ".") === false ? $tableName . trim($item) : $item;
            }
            unset($item);
            $sort = implode(',', $sortArr);
        }
        $adminIds = $this->getDataLimitAdminIds();
        if (is_array($adminIds)) {
            $where[] = ['in', $tableName . $this->dataLimitField, 'in', $adminIds];
        }
        if ($search) {
            $searcharr = is_array($searchfields) ? $searchfields : explode(',', $searchfields);
            foreach ($searcharr as $k => &$v) {
                $v = stripos($v, ".") === false ? $tableName . $v : $v;
            }
            unset($v);

            $where[] = ['search', implode("|", $searcharr), "LIKE", "{$search}"];
        }
        foreach ($filter as $k => $v) {
            if (stripos($k, '|') !== false) {
                if (stripos($k, ".") === false) {
                    $k = $tableName . $k;
                }
                $where[] = ['search', $k, '=', (string)$v];
                continue;
            }
            $sym = isset($op[$k]) ? $op[$k] : '=';
            if (stripos($k, ".") === false) {
                $k = $tableName . $k;
            }
            $v   = !is_array($v) ? trim($v) : $v;
            $sym = strtoupper(isset($op[$k]) ? $op[$k] : $sym);
            switch ($sym) {
                case '=':
                case '!=':
                    $where[] = ['basics', $k, $sym, (string)$v];
                    break;
                case 'LIKE':
                case 'NOT LIKE':
                case 'LIKE %...%':
                case 'NOT LIKE %...%':
                    $where[] = ['like', $k, trim(str_replace('%...%', '', $sym)), $v];
                    break;
                case '>':
                case '>=':
                case '<':
                case '<=':
                    $where[] = ['basics', $k, $sym, intval($v)];
                    break;
                case 'FINDIN':
                case 'FINDINSET':
                case 'FIND_IN_SET':
                    $where[] = ['find_id', "FIND_IN_SET('{$v}', " . ($relationSearch ? $k : '`' . str_replace('.', '`.`', $k) . '`') . ")"];
                    break;
                case 'IN':
                case 'IN(...)':
                case 'NOT IN':
                case 'NOT IN(...)':
                    $where[] = ['in', $k, str_replace('(...)', '', $sym), is_array($v) ? $v : explode(',', $v)];
                    break;
                case 'BETWEEN':
                case 'NOT BETWEEN':
                    $arr = array_slice(explode(',', $v), 0, 2);
                    if (stripos($v, ',') === false || !array_filter($arr))
                        continue;
                    //当出现一边为空时改变操作符
                    if ($arr[0] === '') {
                        $sym = $sym == 'BETWEEN' ? '<=' : '>';
                        $arr = $arr[1];
                    } else if ($arr[1] === '') {
                        $sym = $sym == 'BETWEEN' ? '>=' : '<';
                        $arr = $arr[0];
                    }
                    $where[] = ['range', $k, $sym, $arr];
                    break;
                case 'RANGE':
                case 'NOT RANGE':
                    $v   = str_replace(' - ', ',', $v);
                    $arr = array_slice(explode(',', $v), 0, 2);
                    if (stripos($v, ',') === false || !array_filter($arr))
                        continue;
                    //当出现一边为空时改变操作符
                    if ($arr[0] === '') {
                        $sym = $sym == 'RANGE' ? '<=' : '>';
                        $arr = $arr[1];
                    } else if ($arr[1] === '') {
                        $sym = $sym == 'RANGE' ? '>=' : '<';
                        $arr = $arr[0];
                    }
                    $arr[0]  = strtotime($arr[0]);
                    $arr[1]  = strtotime($arr[1]);
                    $where[] = ['range', $k, str_replace('RANGE', 'BETWEEN', $sym) . ' ', $arr];
                    break;
                case 'LIKE':
                case 'LIKE %...%':
                    $where[] = ['like', $k, 'LIKE', $v];
                    break;
                case 'NULL':
                case 'IS NULL':
                case 'NOT NULL':
                case 'IS NOT NULL':
                    $where[] = ['null', $k, strtolower(str_replace('IS ', '', $sym))];
                    break;
                default:
                    break;
            }
        }
        $where = function ($query) use ($where) {
            foreach ($where as $k => $v) {
                switch ($v[0]) {
                    case 'search';
                        $arr = explode('|', $v[1]);
                        if (stripos($v[3], '-') !== false) {
                            $v[3] = explode('-', $v[3]);
                        }
                        foreach ($arr as $k1 => $v1) {
                            if (is_array($v[3])) {
                                if (isset($v[3][$k1])) {
                                    $query->orWhere($v1, 'like', '%' . $v[3][$k1] . '%');
                                }
                            } else {
                                $query->orWhere($v1, 'like', '%' . $v[3] . '%');
                            }
                        }
                        break;
                    case 'basics';
                        $query->where($v[1], $v[2], $v[3]);
                        break;
                    case 'find_id';
                        $query->whereRaw($v[1]);
                        break;
                    case 'in';
                        $query->whereIn($v[1], $v[3]);
                        break;
                    case 'like';
                        $query->where($v[1], $v[2], '%' . $v[3] . '%');
                        break;
                    case 'range';
                        if (stripos($v[2], 'NOT') !== false) {
                            $query->whereNotBetween($v[1], $v[3]);
                        } else {
                            $query->whereBetween($v[1], $v[3]);
                        }
                        break;
                }
            }

        };

        return [$where, $sort, $order, $offset, $limit];
    }

    /**
     * ajax返回值
     * @param $data
     */
    public function ajaxReturn($data)
    {
        $response = response()->json($data);
        throw  new  HttpResponseException($response);
    }
}