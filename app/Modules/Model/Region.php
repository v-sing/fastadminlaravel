<?php

namespace App\Modules\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\Model\Region
 *
 * @property string $region_code
 * @property string $region_name
 * @property int $region_level
 * @property string $parent_region_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Region whereParentRegionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Region whereRegionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Region whereRegionLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Region whereRegionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Region whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Region extends Model
{
    //
}
