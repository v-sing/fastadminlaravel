<?php

namespace App\Modules\Common\Library;

use Illuminate\Support\Facades\Config;
/**
 * des加解密
 * 调用方式 app('Des')->encrypt($string)| app('Des')->decrypt($string);
 *
 * Class Des
 * @package app\common\library
 */
class Des
{
    private $key;

    //构造方法、
    public function __construct()
    {

        $this->key = Config::get("des_key");
    }

    /**
     * 加密
     * @param $data
     * @return string
     */
    public function encrypt($data)
    {

        return base64_encode(openssl_encrypt($data, 'DES-EDE3', $this->key, OPENSSL_RAW_DATA));

    }

    /**
     * 解密
     * @param $data
     * @return string
     */
    public function decrypt($data)
    {
        return openssl_decrypt(base64_decode($data), 'DES-EDE3', $this->key, OPENSSL_RAW_DATA);
    }


}
