<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午8:10
 */

namespace O\DesignPatterns\Creational\SimpleFactory;


class SimpleFactory
{
       public function createBicycle(): Bicycle
       {
           return new Bicycle();
       }
}
