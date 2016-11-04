<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-4
 * Time: 下午11:36
 */

namespace O\DesignPatterns\Creational\Builder;


use O\DesignPatterns\Creational\Builder\Parts\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function addDoors();

    public function addEngine();

    public function addWheel();

    public function getVehicle(): Vehicle;
}
