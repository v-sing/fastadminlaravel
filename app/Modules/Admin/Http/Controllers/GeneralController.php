<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-09-11
 * Time: 10:17
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Model\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Redis;

class GeneralController extends Controller
{

    public function config()
    {
        $siteList  = [];
        $groupList = Config::getGroupList();
        foreach ($groupList as $k => $v) {
            $siteList[$k]['name']  = $k;
            $siteList[$k]['title'] = $v;
            $siteList[$k]['list']  = [];
        }
        foreach (Config::get()->toArray() as $k => $v) {

            if (!isset($siteList[$v['crux_group']])) {
                continue;
            }
            $value          = $v;
            $value['title'] = $value['title'];
            if (in_array($value['type'], ['select', 'selects', 'checkbox', 'radio'])) {
                $value['value'] = explode(',', $value['crux_value']);
            }
            $value['content']                     = json_decode($value['content'], TRUE);
            $siteList[$v['crux_group']]['list'][] = $value;
        }
        $index = 0;
        foreach ($siteList as $k => &$v) {
            $v['active'] = !$index ? true : false;
            $index++;
        }

        $assign = [
            'siteList'  => $siteList,
            'typeList'  => Config::getTypeList(),
            'groupList' => Config::getGroupList()
        ];
        $this->assign($assign);
        return $this->view();
    }

    public function check(Request $request)
    {
        $this->Validator($request->post('row'),
            ['name' => 'required|unique:configs|max:255']);
        $this->success('验证成功');
    }

    public function add(Request $request)
    {
        $params = $request->post('row');
        if ($params) {
            foreach ($params as $k => &$v) {
                $v = is_array($v) ? implode(',', $v) : $v;
            }
            try {
                if (in_array($params['type'], ['select', 'selects', 'checkbox', 'radio', 'array'])) {
                    $params['content'] = json_encode(Config::decode($params['content']), JSON_UNESCAPED_UNICODE);
                } else {
                    $params['content'] = '';
                }
                $config = new Config();
                if ($config->insert($params)) {
                    try {
                        Redis::del('config:cache');
                        Config::cache();
                    } catch (\Exception $e) {
                        $this->error($e->getMessage());
                    }
                    $this->success();
                } else {
                    $this->error();
                }
            } catch (\Exception $e) {
                $this->error($e->getMessage());
            }
        }
        $this->error();
    }

    public function edit(Request $request)
    {
        $row = $request->post("row");
        if ($row) {
            $configList = [];
            foreach (Config::all() as $v) {
                if (isset($row[$v['name']])) {
                    $value = $row[$v['name']];
                    if (is_array($value) && isset($value['field'])) {
                        $value = json_encode(Config::getArrayData($value), JSON_UNESCAPED_UNICODE);
                    } else {
                        $value = is_array($value) ? implode(',', $value) : $value;
                    }
                    $v['crux_value'] = $value;
                    $configList[]    = $v->toArray();
                }
            }
            Config::updateBatch($configList);
            try {
                Redis::del('config:cache');
                Config::cache();
            } catch (Exception $e) {
                $this->error($e->getMessage());
            }
            $this->success();
        }
        $this->error();
    }

    public function emailtest(Request $request)
    {

    }
}