<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午1:14
 */

namespace O\Tests;


use O\DesignPatterns\Creational\FactoryMethod\FactoryMethod;
use O\DesignPatterns\Creational\FactoryMethod\GermanFactory;
use O\DesignPatterns\Creational\FactoryMethod\ItalianFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest  extends TestCase
{
     public function testCanCreateCheapVehicleInGermany()
     {
         $factory = new GermanFactory();
         $result = $factory->create(FactoryMethod::CHEAP);

         $this->assertInstanceOf('O\DesignPatterns\Creational\FactoryMethod\Bicycle', $result);
     }

     public function testCanCreateFastVehicleInGermany()
     {
         $factory = new GermanFactory();
         $result = $factory->create(FactoryMethod::FAST);
         $this->assertInstanceOf('O\DesignPatterns\Creational\FactoryMethod\CarMercedes', $result);
     }

     public function testCanCreateCheapVehicleInItaly()
     {
         $factory = new ItalianFactory();
         $result = $factory->create(FactoryMethod::CHEAP);
         $this->assertInstanceOf('O\DesignPatterns\Creational\FactoryMethod\Bicycle', $result);
     }

     public function testCanCreateFastVehicleInItaly()
     {
         $factory = new ItalianFactory();
         $result = $factory->create(FactoryMethod::FAST);

         $this->assertInstanceOf('O\DesignPatterns\Creational\FactoryMethod\CarFerrari', $result);
     }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage spaceship is not a valid vehicle
     */
    public function testUnknownType()
    {
        (new ItalianFactory())->create('spaceship');
    }
}
