<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-01
 * Time: 14:51
 */

namespace App\Modules\Admin\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Common\Library\IdentityInformation;
use App\Modules\Common\Library\Random;
use App\Modules\Model\Attachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AjaxController extends Controller
{

    public function lang(Request $request)
    {
        $controller = $request->input('controllername');
        $array      = is_array(trans('admin::' . $controller)) ? trans('admin::' . $controller) : [];
        $array      = array_merge(trans('admin::common'), $array);
        return jsonp('define', $array);
    }

    public function upload(Request $request)
    {
        $fileCharater = $request->file('file');
        if ($fileCharater->isValid()) {
            //获取文件的扩展名
            $ext    = $fileCharater->getClientOriginalExtension();
            $upload = config('upload');

            $systemMaxSize = ini_get('upload_max_filesize');
            preg_match('/(\d+)(\w+)/', $upload['maxsize'], $matches);
            preg_match('/(\d+)(\w+)/', $systemMaxSize, $matches1);
            $type       = strtolower($matches[2]);
            $systemType = strtolower($matches1[2]);
            $typeDict   = ['b' => 0, 'k' => 1, 'kb' => 1, 'm' => 2, 'mb' => 2, 'gb' => 3, 'g' => 3];
            $fileSize   = $fileCharater->getSize();
            $size       = (int)$upload['maxsize'] * pow(1024, isset($typeDict[$type]) ? $typeDict[$type] : 0);
            $systemSize = (int)$systemMaxSize * pow(1024, isset($typeDict[$systemType]) ? $typeDict[$systemType] : 0);
            if ($fileSize > $systemSize) {
                $this->error(lang('System max size error', $systemMaxSize));
            }
            if ($fileSize > $size) {
                $this->error(lang('Max size error', $upload['maxsize']));
            }
            $fileName   = $fileCharater->getClientOriginalName();
            $path       = $fileCharater->getRealPath();
            $mimetype   = $fileCharater->getMimeType();
            $replaceArr = [
                '{year}'     => date("Y"),
                '{mon}'      => date("m"),
                '{day}'      => date("d"),
                '{hour}'     => date("H"),
                '{min}'      => date("i"),
                '{sec}'      => date("s"),
                '{random}'   => Random::alnum(16),
                '{random32}' => Random::alnum(32),
                '{filename}' => $ext ? substr($fileName, 0, strripos($fileName, '.')) : $fileName,
                '{suffix}'   => $ext,
                '{.suffix}'  => $ext ? '.' . $ext : '',
                '{filemd5}'  => md5_file($path),
            ];
            $savekey    = $upload['savekey'];
            $savekey    = str_replace(array_keys($replaceArr), array_values($replaceArr), $savekey);
            if (Attachment::where(['url' => '/storage'.$savekey])->count() > 0) {
                $this->success('Upload successful',null, ['url' => '/storage'.$savekey, 'fullurl' => '/storage'.$savekey]);
            }
            $bool = Storage::disk(config('upload.disks'))->put($savekey, file_get_contents($path));
            if ($bool) {
                $imagewidth = $imageheight = 0;
                if (in_array($ext, ['gif', 'jpg', 'jpeg', 'bmp', 'png', 'swf'])) {
                    $imgInfo     = getimagesize($path);
                    $imagewidth  = isset($imgInfo[0]) ? $imgInfo[0] : $imagewidth;
                    $imageheight = isset($imgInfo[1]) ? $imgInfo[1] : $imageheight;
                }
                $params     = array(
                    'admin_id'    => (int)$request->auth()->id,
                    'user_id'     => 0,
                    'filesize'    => $size,
                    'imagewidth'  => $imagewidth,
                    'imageheight' => $imageheight,
                    'imagetype'   => $ext,
                    'imageframes' => 0,
                    'mimetype'    => $mimetype,
                    'url'         => '/storage'.$savekey,
                    'uploadtime'  => date('YmdHis'),
                    'storage'     => config('upload.disks'),
                    'sha1'        => $fileCharater->isValid(),
                    'extparam'    => json_encode($request->all()),
                );
                $attachment = new Attachment();
                $result     = $attachment->insert($params);
                if ($result) {
                    $this->success('Upload successful', null,
                        ['url' => '/storage'.$savekey, 'fullurl' => '/storage'.$savekey]);
                } else {
                    $this->error();
                }
            } else {
                $this->error();
            }
        }

    }

    public function real()
    {
        $IdentityInformation = new IdentityInformation();
        $IdentityInformation->getName();
        $IdentityInformation->getIdentity();
        $IdentityInformation->getIndustries();
        $real = $IdentityInformation->info();
        dd($real);
    }
}