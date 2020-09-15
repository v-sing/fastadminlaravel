<?php

namespace App\Modules\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\Model\Config
 *
 * @property int $id
 * @property string|null $crux_group 分组
 * @property string|null $title 变量标题
 * @property string|null $name 变量名
 * @property string|null $crux_value 变量名
 * @property string|null $tip 描述
 * @property string|null $type 类型:string,text,bool,array,checkbox,radio,sgin
 * @property string|null $crux_rule 验证规则正则
 * @property string|null $extend 扩展属性
 * @property string|null $content 数据列表
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCruxGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCruxRule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCruxValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereExtend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereTip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Config extends Model
{
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
    /**
     * 读取分类分组列表
     * @return array
     */
    public static function getGroupList()
    {
        $groupList = config('site.configgroup');
        foreach ($groupList as $k => &$v) {
            $v = lang($v);
        }
        return $groupList;
    }

    public static function getTypeList()
    {
        return $typeList = [
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
    }

    public static function getArrayData($data)
    {
        if (!isset($data['crux_value'])) {
            $result = [];
            foreach ($data as $index => $datum) {
                $result['field'][$index]      = $datum['key'];
                $result['crux_value'][$index] = $datum['crux_value'];
            }
            $data = $result;
        }
        $fieldarr = $valuearr = [];
        $field    = isset($data['field']) ? $data['field'] : (isset($data['key']) ? $data['key'] : []);
        $value    = isset($data['crux_value']) ? $data['crux_value'] : [];
        foreach ($field as $m => $n) {
            if ($n != '') {
                $fieldarr[] = $field[$m];
                $valuearr[] = $value[$m];
            }
        }
        return $fieldarr ? array_combine($fieldarr, $valuearr) : [];
    }

    /**
     * 将字符串解析成键值数组
     * @param string $text
     * @return array
     */
    public static function decode($text, $split = "\r\n")
    {
        $content = explode($split, $text);
        $arr     = [];
        foreach ($content as $k => $v) {
            if (stripos($v, "|") !== false) {
                $item          = explode('|', $v);
                $arr[$item[0]] = $item[1];
            }
        }
        return $arr;
    }

    /**
     * 将键值数组转换为字符串
     * @param array $array
     * @return string
     */
    public static function encode($array, $split = "\r\n")
    {
        $content = '';
        if ($array && is_array($array)) {
            $arr = [];
            foreach ($array as $k => $v) {
                $arr[] = "{$k}|{$v}";
            }
            $content = implode($split, $arr);
        }
        return $content;
    }

    /**
     * 本地上传配置信息
     * @return array
     */
    public static function upload()
    {
        $uploadcfg = config('upload');
        $upload    = [
            'cdnurl'    => $uploadcfg['cdnurl'],
            'uploadurl' => $uploadcfg['uploadurl'],
            'bucket'    => 'local',
            'maxsize'   => $uploadcfg['maxsize'],
            'mimetype'  => $uploadcfg['mimetype'],
            'multipart' => [],
            'multiple'  => $uploadcfg['multiple'],
        ];
        return $upload;
    }
}
