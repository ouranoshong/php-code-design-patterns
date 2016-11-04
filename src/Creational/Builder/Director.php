<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-5
 * Time: 上午12:02
 */

namespace O\DesignPatterns\Creational\Builder;


use O\DesignPatterns\Creational\Builder\Parts\Vehicle;

class Director
{
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addEngine();
        $builder->addDoors();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}
