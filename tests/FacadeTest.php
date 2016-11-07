<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-7
 * Time: 下午10:46
 */

namespace O\Tests;


use O\DesignPatterns\Structural\Facade\Facade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock('O\DesignPatterns\Structural\Facade\OsInterface');

        $os->method('getName')
            ->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder('O\DesignPatterns\Structural\Facade\BiosInterface')
            ->setMethods(['launch', 'execute', 'waitForKeyPress', 'powerDown'])
            ->disableAutoload()
            ->getMock();


        $facade = new Facade($bios, $os);

        // the facade interface is simple
        $facade->turnOn();

        $osName = $os->getName();

        $facade->turnOff();

        // but you can also access the underlying components
        $this->assertEquals('Linux', $osName);

    }
}
