<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午8:17
 */

namespace O\Tests;


use O\DesignPatterns\Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest  extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();

        $this->assertInstanceOf('O\DesignPatterns\Creational\SimpleFactory\Bicycle', $bicycle);
    }
}
