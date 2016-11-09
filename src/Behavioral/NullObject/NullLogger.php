<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-9
 * Time: 下午8:24
 */

namespace O\DesignPatterns\Behavioral\NullObject;


class NullLogger implements LoggerInterface
{

    public function log(string $str)
    {

    }
}
