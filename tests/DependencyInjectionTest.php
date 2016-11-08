<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 2:48 PM
 */

namespace O\Tests;


use O\DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
use O\DesignPatterns\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'hong', '123456');
        $connection =  new DatabaseConnection($config);
        $this->assertEquals('hong:123456@localhost:3306', $connection->getDsn());
    }
}
