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
    //
}
