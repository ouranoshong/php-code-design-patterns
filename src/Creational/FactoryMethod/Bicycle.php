<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午12:52
 */

namespace O\DesignPatterns\Creational\FactoryMethod;


class Bicycle implements VehicleInterface
{
    private $color;

    public function setColor(string $rgb)
    {
        $this->color = $rgb;
    }

}
