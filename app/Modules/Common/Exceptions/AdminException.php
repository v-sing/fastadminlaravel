<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-02
 * Time: 16:11
 */

namespace App\Modules\Common\Exceptions;


use Throwable;

class AdminException extends \Exception
{

    public function __construct(string $message = "", int $code = 0, Throwable $previous = null,$xxx='')
    {
        parent::__construct($message, $code, $previous);
    }
}