<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午12:54
 */

namespace O\DesignPatterns\Creational\FactoryMethod;


abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    abstract protected function createVehicle(string $type): VehicleInterface;

    public function create (string $type): VehicleInterface
    {
        $obj = $this->createVehicle($type);
        $obj->setColor('black');

        return $obj;
    }
}
