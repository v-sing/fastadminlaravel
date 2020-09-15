<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-06-18
 * Time: 14:07
 */

namespace App\Modules\Common\Repositories;

use App\Modules\Model\Config as Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ConfigRepositories
{
    //string,text,bool,array,checkbox,radio,sgin
    private $typeList = [
        'string'        => '字符',
        'text'          => '文本',
        'bool'          => '布尔',
        'date'          => '日期',
        'time'          => '时间',
        'datetime'      => '日期时间',
        'daterange'     => '日期范围',
        'timerange'     => '时间范围',
        'datetimerange' => '日期时间范围',
        'file'          => '文件',
        'files'         => '多文件',
        'image'         => '图片',
        'images'        => '多图片',
        'array'         => '数组',
        'select'        => '下拉框',
        'selects'       => '下拉多选框',
        'checkbox'      => '复选框',
        'radio'         => '单选框',
        'sign'          => '密码框',
    ];

    private $content = "key1|value1\nkey2|value2";

    function list(Request $request)
    {

        $cardTab = [];
        $info    = Platform::query()->where(['name' => 'configgroup'])->first();
        $tab     = json_decode($info->crux_value, true);
        $data    = Platform::orderBy('id')->get();
        foreach ($tab as $key => $value) {
            if (!isset($cardTab[$key])) {
                $cardTab[$key] = [];
            }
            foreach ($data as $index => $item) {
                $content = [];
                if ($key == $item->crux_group) {
                    if ($item->content) {
                        switch ($item->type) {
                            case "select":
                            case "selects":
                                $content = json_decode($item->content, true);
                                break;
                            case "array":
                                $array = explode("\n", trim($item->content));
                                foreach ($array as $item1) {
                                    list($contentKey, $contentValue) = explode('|', $item1);
                                    $content[] = ['key' => $contentKey, 'value' => $contentValue];
                                }
                                break;
                        }

                    } else {
                        $content = [];
                    }
                    $item->content                = $content;
                    $cardTab[$item->crux_group][] = $item;
                }
            }
        }
        return ['tab' => $tab, 'content' => $cardTab, 'form' => $this->typeList, 'default' => $this->content];
    }

    public function addField(Request $request)
    {
        $param = $request->post();

        $model = Platform::where(['name' => $param['name'], 'crux_group' => $param['crux_group']])->first();
        if ($model) {
            throw new \RuntimeException('变量重复', -1);
        }
        $model = new Platform();
        $model->fill($param);
        if ($model->save()) {
            Redis::del('platform:config');
            $this->config();
            return true;
        } else {
            return false;
        }
    }

    public function delField(Request $request)
    {
        $param = $request->post();
        $info  = Platform::where(['id' => $param['id']])->first();
        if (empty($info)) {
            throw new \RuntimeException('配置不存在！！');
        }
        if ($info->delete()) {
            Redis::del('platform:config');
            $this->config();
            return true;
        } else {
            return false;
        }
    }

    public function editGroup(Request $request)
    {
        $param        = $request->post();
        $multipleData = [];
        $index        = 0;
        foreach ($param as $key => $item) {
            $item[$key] = count($item) == 2 ? '' : $item[$key];
            if ($key == 'configgroup') {
                $flag = array_diff(config('dictionary.configgroup'), json_decode($item[$key], true));
                if (!empty($flag)) {
                    if (Platform::whereIn('crux_group', array_keys($flag))->count()) {
                        throw new \RuntimeException('数据字典存在配置，请删除对应配置项');
                    }
                }
            }
            switch ($item['_type']) {
                case 'bool':
                    $value = $item[$key] == 'on' ? 1 : 0;
                    break;
                case 'checkbox':
                    $value = empty($item[$key]) ? "" : implode(',', $item[$key]);
                    break;
                default:
                    $value = $item[$key];
                    break;
            }
            $multipleData[$index]['id']         = $item['_id'];
            $multipleData[$index]['crux_value'] = trim($value);
            $model                              = Platform::where(['id' => $item['_id']])->first();
            $model->fill($multipleData[$index]);
            $model->save();
            $index++;
        }
        Redis::del('platform:config');
        $this->config();
        return true;

    }

    public function config()
    {
        $array = json_decode(Redis::get('platform:config'), true) ?? [];
        if (empty($array) && \Schema::hasTable("configs") && \Schema::hasColumn('configs', 'deleted_at')) {
            $array = [];
            $data  = Platform::orderBy('id')->get();
            foreach ($data as $item) {
                switch ($item->type) {
                    case 'array';
                        $item->crux_value = json_decode($item->crux_value, true) ?? [];
                        break;
                    case 'checkbox';
                    case 'selects';
                        $item->crux_value = explode(',', $item->crux_value) ?? [];
                        break;
                    case 'daterange';
                    case 'timerange';
                    case 'datetimerange';
                        $item->crux_value = explode(' - ', $item->crux_value) ?? [];
                        break;
                    default:
                        break;
                }
                $array[$item->crux_group][$item->name] = $item->crux_value;
            }
            Redis::set('platform:config', json_encode($array));
        }
        $route  = getRealRoute();
        $config = [
            'admin' => [
                'login_captcha'    => true,
                'login_background' => '/assets/img/loginbg.jpg',
            ],

            'site'           => [
                'name'        => 'FastAdmin',
                'cdnurl'      => '',
                'version'     => '1.0.5',
                'timezone'    => 'Asia/Shanghai',
                'languages'   => [
                    'backend'  => 'zh-cn',
                    'frontend' => 'zh-cn'
                ],
                'configgroup' => [
                    "basic"      => 'Basic',
                    "email"      => "Email",
                    "dictionary" => "Dictionary",
                    "user"       => "User",
                    "example"    => "Example"
                ]

            ],
            'upload'         => [
                'cdnurl'    => '',
                'uploadurl' => "/ajax/upload",
                'bucket'    => "local",
                'maxsize'   => '10mb',
                'mimetype'  => 'jpg,png,bmp,jpeg,gif,zip,rar,xls,xlsx',
                'multipart' => [],
                'multiple'  => false
            ],
            'modulename'     => trim($route['module'], '/'),
            'controllername' => $route['controller'],
            'actionname'     => $route['action'],
            'jsname'         => 'backend/' . $route['controller'],
            'app_debug'      => 'ajax/upload',
            'moduleurl'      => $route['module']
        ];
//        config($config);
        return $config;
    }
}
