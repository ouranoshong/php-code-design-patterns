<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午7:55
 */

namespace O\DesignPatterns\Creational\Prototype;


class BarBookPrototype extends BookPrototype
{
    protected $category = 'bar';

    public function __clone()
    {

    }
}
