<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/9/16
 * Time: 2:28 PM
 */

namespace O\Tests;


use O\DesignPatterns\Behavioral\Mediator\Mediator;
use O\DesignPatterns\Behavioral\Mediator\Subsystem\Client;
use O\DesignPatterns\Behavioral\Mediator\Subsystem\Database;
use O\DesignPatterns\Behavioral\Mediator\Subsystem\Server;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        $client = new Client();
        new Mediator(new Database(), $client, new Server());

        $this->expectOutputString('Hello World');

        $client->request();
    }
}
