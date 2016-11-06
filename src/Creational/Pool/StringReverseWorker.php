<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午6:13
 */

namespace O\DesignPatterns\Creational\Pool;


class StringReverseWorker
{
     private $createAt;

    public function __construct()
    {
        $this->createAt = new \DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}
