<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午9:49
 */

namespace O\Tests;


use O\DesignPatterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
            'O\DesignPatterns\Creational\StaticFactory\FormatNumber',
            StaticFactory::factory('number')
            );
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            'O\DesignPatterns\Creational\StaticFactory\FormatString',
            StaticFactory::factory('string')
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory('object');
    }
}
