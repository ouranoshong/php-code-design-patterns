<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/9/16
 * Time: 9:43 AM
 */

namespace O\Tests;


use O\DesignPatterns\Behavioral\Command\HelloCommand;
use O\DesignPatterns\Behavioral\Command\Invoker;
use O\DesignPatterns\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();

        $this->assertEquals($receiver->getOutput(), 'Hello World');
    }

    public function testReceiverWriteWithEnableDate()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $receiver->enableDate();
        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();

        $this->assertTrue($this->getObjectAttribute($receiver, 'enableDate'));
        $this->assertContains('Hello World', $receiver->getOutput());
    }

    public function testReceiverWriteWithDisableDate()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $receiver->enableDate();

        $this->assertTrue($this->getObjectAttribute($receiver, 'enableDate'));

        $receiver->disableDate();
        $this->assertFalse($this->getObjectAttribute($receiver, 'enableDate'));

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();

        $this->assertEquals('Hello World', $receiver->getOutput());
    }

}
