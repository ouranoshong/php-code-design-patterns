<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/8/16
 * Time: 2:30 PM
 */

namespace O\Tests;


use O\DesignPatterns\Structural\Proxy\RecordProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testCanProxy()
    {
        $proxy = new RecordProxy(['username'=>'tony']);

        $this->assertTrue($proxy->isDirty());
        $this->assertSame('tony', $proxy->username);

        $proxy->username = 'tom';
        $this->assertSame('tom', $proxy->username);
    }

    /**
     * @expectedException \OutOfRangeException
     */
    public function testCanNoGetDoNotExistKey()
    {
        $proxy = new RecordProxy(['username'=>'tony']);

        $proxy->user;
    }
}
