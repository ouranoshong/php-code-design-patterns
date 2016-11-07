<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 10:51 AM
 */

namespace O\DesignPatterns\Structural\Bridge;


interface FormatterInterface
{
    public function format(string $text);
}
