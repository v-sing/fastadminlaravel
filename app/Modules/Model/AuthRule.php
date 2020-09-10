<?php

namespace App\Modules\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\Model\AuthRule
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule query()
 * @mixin \Eloquent
 * @property int $id
 * @property string|null $type menu为菜单,file为权限节点
 * @property int|null $pid 父ID
 * @property string|null $name 规则名称
 * @property string|null $title 规则标题
 * @property string|null $icon 图标
 * @property string|null $condition 条件
 * @property string|null $remark 备注
 * @property int|null $ismenu 是否为菜单
 * @property int|null $weigh 权重
 * @property string|null $status 状态
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule whereCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule whereIsmenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule whereWeigh($value)
 */
class AuthRule extends Model
{
    //
}
