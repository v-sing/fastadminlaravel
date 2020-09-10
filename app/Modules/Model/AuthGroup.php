<?php

namespace App\Modules\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\Model\AuthGroup
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroup query()
 * @mixin \Eloquent
 * @property int $id
 * @property int|null $pid 父组别
 * @property string|null $name 组名
 * @property string $rules 规则ID
 * @property string|null $status 状态
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroup wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroup whereRules($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroup whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroup whereUpdatedAt($value)
 */
class AuthGroup extends Model
{
    //
}
