<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-4
 * Time: 下午11:51
 */

namespace O\DesignPatterns\Creational\Builder;


use O\DesignPatterns\Creational\Builder\Parts\Vehicle;

class CartBuilder implements BuilderInterface
{
    /**
     * @var Parts\Vehicle | Parts\Cart;
     */
    private $cart;

    public function createVehicle()
    {
        $this->cart = new Parts\Cart();
    }

    public function addDoors()
    {
        $this->cart->setPart('rightDoor', new Parts\Door());
        $this->cart->setPart('leftDoor', new Parts\Door());
        $this->cart->setPart('truckLid', new Parts\Door());;
    }

    public function addEngine()
    {
          $this->cart->setPart('engine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->cart->setPart('wheelLF', new Parts\Wheel());
        $this->cart->setPart('wheelRF', new Parts\Wheel());
        $this->cart->setPart('wheelLR', new Parts\Wheel());
        $this->cart->setPart('wheelRR', new Parts\Wheel());
    }

    public function getVehicle(): Vehicle
    {
        return $this->cart;
    }
}
