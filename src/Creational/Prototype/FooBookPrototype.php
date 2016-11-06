<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午7:56
 */

namespace O\DesignPatterns\Creational\Prototype;


class FooBookPrototype extends BookPrototype
{

    protected $category = 'foo';

    public function __clone()
    {

    }
}
