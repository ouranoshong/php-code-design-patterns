<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-5
 * Time: 上午12:01
 */

namespace O\Tests;


use O\DesignPatterns\Creational\Builder\CartBuilder;
use O\DesignPatterns\Creational\Builder\Director;
use O\DesignPatterns\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $builder = new TruckBuilder();
        $newVehicle = (new Director())->build($builder);

        $this->assertInstanceOf('O\DesignPatterns\Creational\Builder\Parts\Truck', $newVehicle);

    }

    public function testCanBuildCart()
    {
        $builder = new CartBuilder();
        $newVehicle = (new Director())->build($builder);
        $this->assertInstanceOf('O\DesignPatterns\Creational\Builder\Parts\Cart', $newVehicle);
    }
}
