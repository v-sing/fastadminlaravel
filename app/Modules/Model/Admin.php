<?php

namespace App\Modules\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\Model\Admin
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin query()
 * @mixin \Eloquent
 * @property int $id
 * @property string|null $username 用户名
 * @property string|null $nickname 昵称
 * @property string|null $password 密码
 * @property string|null $salt 密码盐
 * @property string|null $avatar 头像
 * @property string|null $email 邮箱
 * @property int|null $loginfailure 失败次数
 * @property int|null $logintime 登陆时间
 * @property string|null $token Session标识
 * @property string|null $status 状态
 * @property string|null $panterid 商户号
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereLoginfailure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereLogintime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin wherePanterid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereSalt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereUsername($value)
 */
class Admin extends Model
{
    //
}
