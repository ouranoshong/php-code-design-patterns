<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午12:59
 */

namespace O\DesignPatterns\Creational\FactoryMethod;


class GermanFactory extends FactoryMethod
{

    protected function createVehicle(string $type): VehicleInterface
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
            case parent::FAST:
                $carMercedes = new CarMercedes();
                // we can specialize the way we want some concrete Vehicle since we know the class
                $carMercedes->addAMGTuning();

                return $carMercedes;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}
