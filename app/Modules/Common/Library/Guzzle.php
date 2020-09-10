<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019/7/2
 * Time: 18:55
 */

namespace App\Modules\Common\Library;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise;
use function GuzzleHttp\Psr7\rewind_body;

/**
 * 请求类
 * Class Guzzle
 * @package app\common\library
 */
class Guzzle
{
    protected $Guzzle = [];

    /**
     * 释放资源
     */
    public function closeAllConns()
    {
        if (count($this->guzzle) === 0) {
            return true;
        }
        foreach ($this->guzzle as $conn) {
            $conn = null;
        }

    }

    /**
     * 实例化guzzle
     * @param $base_uri  uri
     * @return bool
     */
    private function init($base_uri)
    {

        if (!isset($guzzle[$base_uri])) {

            if (!isset($this->guzzle[$base_uri])) {
                if (empty($base_uri)) {
                    return false;
                }
                $this->guzzle[$base_uri] = new Client([
                    // Base URI is used with relative requests
                    'base_uri' => $base_uri,
                    // You can set any number of default request options.
                    'timeout'  => 60.0,
                    // https请求
                    'verify'   => false
                ]);
            }
        }
        return true;
    }

    /**
     * 获取guzzle实例
     * @param $base_uri   uri
     * @return bool|mixed
     */
    public function getGuzzle($base_uri)
    {
        $ret = $this->init($base_uri);
        if ($ret == false) {
            return false;
        }
        return $this->guzzle[$base_uri];
    }

    /**
     * post请求
     * @param $base_uri
     * @param $api
     * @param array $post_data
     * @param array $headers
     * @param string $type
     * @param string $cookie
     * @return mixed
     * @throws \Exception
     */
    public function post($base_uri, $api, $post_data = [], $headers = [], $type = 'json', $cookie = '')
    {
        $guzzle_ins = $this->getGuzzle($base_uri);
        try {
            $data     = [
                'headers' => $headers,
                'json'    => $post_data,
                'cookies' => $cookie,
            ];
            $response = $guzzle_ins->post($api, $data);

            $response_code = $response->getStatusCode();
            if ($response_code == '200') {
                return $response->getBody()->getContents();
            } else {
                return false;
            }
        } catch (RequestException $e) {
            return false;
        }

    }

    /**
     * post请求
     * @param $base_uri
     * @param $api
     * @param array $post_data
     * @param array $headers
     * @param string $type
     * @param string $cookie
     * @return mixed
     * @throws \Exception
     */
    public function xmlPost($base_uri, $api, $post_data = '', $headers = [], $type = 'json', $cookie = '')
    {
        $guzzle_ins = $this->getGuzzle($base_uri);
        try {
            $data     = [
                'headers' => $headers,
                'body'    => $post_data,
                'cookies' => $cookie,
            ];
            $response = $guzzle_ins->post($api, $data);

            $response_code = $response->getStatusCode();
            if ($response_code == '200') {
                return $response->getBody()->getContents();
            } else {
                return false;
            }
        } catch (RequestException $e) {
            return false;
        }

    }

    /**
     * post异步请求
     * @param $base_uri
     * @param $api
     * @param array $post_data
     * @param array $headers
     * @param string $cookie
     * @return array|mixed
     * @throws \Throwable
     *
     */
    public function postAsync($base_uri, $api, $post_data = [], $headers = [], $cookie = '')
    {
        $guzzle_ins = $this->getGuzzle($base_uri);
        $info       = [];
        try {
            $data     = [
                'headers' => $headers,
                'body'    => $post_data,
                'cookies' => $cookie,
            ];
            $promises = [$guzzle_ins->postAsync($api, $data)];
            $ret      = Promise\unwrap($promises);
            foreach ($ret as $k => $v) {
                $info = $v->getBody()->getContents();   //获取server端返回值
            }
            return $info;
        } catch (RequestException $e) {
            throw new \Exception($e->getMessage());
        }


    }

    /**
     * get请求
     * @param $base_uri
     * @param $api
     * @param array $headers
     * @return mixed
     * @throws \Exception
     */
    public function get($base_uri, $api, $data = [], $headers = [])
    {
        $guzzle_ins = $this->getGuzzle($base_uri);
        $info       = [];
        try {
            $data          = [
                'headers' => $headers,
                'json'    => $data
            ];
            $response      = $guzzle_ins->get($api, $data);
            $response_code = $response->getStatusCode();
            if ($response_code == '200') {
                return $response->getBody()->getContents();
            } else {
                return false;
            }
        } catch (RequestException $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * get 异步请求
     * @param $base_uri
     * @param $api
     * @param array $headers
     * @return array|mixed
     * @throws \Throwable
     */
    public function getAsync($base_uri, $api, $headers = [])
    {
        $guzzle_ins = $this->getGuzzle($base_uri);
        $info       = [];
        try {
            $data     = [
                'headers' => $headers,
            ];
            $promises = [$guzzle_ins->getAsync($api, $data)];
            $ret      = Promise\unwrap($promises);

            foreach ($ret as $k => $v) {
                $info = $v->getBody()->getContents();   //获取server端返回值
            }
            return $info;
        } catch (RequestException $e) {
            throw new \Exception($e->getMessage());
        }

    }
}

