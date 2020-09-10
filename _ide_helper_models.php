<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Modules\Model{
/**
 * App\Modules\Model\Admin
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin query()
 * @mixin \Eloquent
 */
	class Admin extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\AdminLog
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog query()
 * @mixin \Eloquent
 */
	class AdminLog extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\AuthGroup
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroup query()
 * @mixin \Eloquent
 */
	class AuthGroup extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\AuthGroupAccess
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroupAccess newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroupAccess newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthGroupAccess query()
 * @mixin \Eloquent
 */
	class AuthGroupAccess extends \Eloquent {}
}

namespace App\Modules\Model{
/**
 * App\Modules\Model\AuthRule
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AuthRule query()
 * @mixin \Eloquent
 */
	class AuthRule extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

