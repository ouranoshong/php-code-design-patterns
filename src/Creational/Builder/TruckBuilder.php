<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-4
 * Time: 下午11:40
 */

namespace O\DesignPatterns\Creational\Builder;


use O\DesignPatterns\Creational\Builder\Parts\Vehicle;

class TruckBuilder implements BuilderInterface
{
    /**
     * @var Parts\Vehicle | Parts\Truck
     */
    private $truck;

    public function createVehicle()
    {
        $this->truck = new Parts\Truck();
    }

    public function addDoors()
    {
        $this->truck->setPart('leftDoor', new Parts\Door());
        $this->truck->setPart('rightDoor', new Parts\Door());
    }

    public function addEngine()
    {
          $this->truck->setPart('truckEngine', new Parts\Truck());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Parts\Wheel());
        $this->truck->setPart('wheel2', new Parts\Wheel());
        $this->truck->setPart('wheel3', new Parts\Wheel());
        $this->truck->setPart('wheel4', new Parts\Wheel());
        $this->truck->setPart('wheel5', new Parts\Wheel());
        $this->truck->setPart('wheel6', new Parts\Wheel());

    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
