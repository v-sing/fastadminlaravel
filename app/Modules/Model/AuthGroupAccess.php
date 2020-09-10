<?php

namespace App\Modules\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\Model\AuthGroupAccess
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroupAccess newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroupAccess newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroupAccess query()
 * @mixin \Eloquent
 * @property int|null $uid 会员ID
 * @property int|null $group_id 级别ID
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Modules\Model\AuthGroup|null $authGroup
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroupAccess whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroupAccess whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroupAccess whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroupAccess whereUpdatedAt($value)
 */
class AuthGroupAccess extends Model
{
    //
    public function authGroup()
    {
        return $this->belongsTo(AuthGroup::class,'uid','id');
    }
}
