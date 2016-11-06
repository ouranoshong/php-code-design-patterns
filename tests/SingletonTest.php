<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午8:25
 */

namespace O\Tests;


use O\DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf('O\DesignPatterns\Creational\Singleton\Singleton', $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}
