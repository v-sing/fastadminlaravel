<?php

namespace App\Modules\Model;

use App\Modules\Admin\Http\Auth;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\Model\AdminLog
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog query()
 * @mixin \Eloquent
 * @property int $id
 * @property int|null $admin_id 管理员ID
 * @property string|null $username 管理员名字
 * @property string|null $url 操作页面
 * @property string|null $title 日志标题
 * @property string $content 内容
 * @property string|null $ip IP
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\AdminLog whereUsername($value)
 * @property-read \App\Modules\Model\Admin|null $admin
 */
class AdminLog extends Model
{
    //
    //自定义日志标题
    protected static $title = '';
    //自定义日志内容
    protected static $content = '';

    public static function setTitle($title)
    {
        self::$title = $title;
    }

    public static function setContent($content)
    {
        self::$content = $content;
    }

    public static function record($title = '')
    {
        $auth     = Auth::instance();
        $admin_id = $auth->isLogin() ? $auth->id : 0;
        $username = $auth->isLogin() ? $auth->username : lang('Unknown');
        $content  = self::$content;
        if (!$content) {
            $content = request()->all();
            foreach ($content as $k => $v) {
                if (is_string($v) && strlen($v) > 200 || stripos($k, 'password') !== false) {
                    unset($content[$k]);
                }
            }
        }
        $title = self::$title;
        if (!$title) {
            $title      = [];
            $breadcrumb = Auth::instance()->getBreadcrumb();
            foreach ($breadcrumb as $k => $v) {
                $title[] = $v['title'];
            }
            $title = implode(' ', $title);
        }
        $data = [
            'title'     => $title,
            'content'   => !is_scalar($content) ? json_encode($content) : $content,
            'url'       => substr(request()->url(), 0, 1500),
            'admin_id'  => $admin_id,
            'username'  => $username,
            'useragent' => substr(request()->server('HTTP_USER_AGENT'), 0, 255),
            'ip'        => request()->ip()
        ];
//        foreach ($data as $field =>$value){
//            $this->setAttribute($field, $value);
//        }

//        self::setAttribute('title', $title);
//        self::setAttribute('title', $title);
//        self::setAttribute('title', $title);
        self::insert($data);
//        self::create([
//            'title'     => $title,
//            'content'   => !is_scalar($content) ? json_encode($content) : $content,
//            'url'       => substr(request()->url(), 0, 1500),
//            'admin_id'  => $admin_id,
//            'username'  => $username,
//            'useragent' => substr(request()->server('HTTP_USER_AGENT'), 0, 255),
//            'ip'        => request()->ip()
//        ]);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }
}
