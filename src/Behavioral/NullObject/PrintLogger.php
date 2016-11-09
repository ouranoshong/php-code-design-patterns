<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-9
 * Time: 下午8:26
 */

namespace O\DesignPatterns\Behavioral\NullObject;


class PrintLogger implements LoggerInterface
{

    public function log(string $str)
    {
        echo $str;
    }
}
