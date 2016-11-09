<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-9
 * Time: 下午8:28
 */

namespace O\Tests;


use O\DesignPatterns\Behavioral\NullObject\NullLogger;
use O\DesignPatterns\Behavioral\NullObject\PrintLogger;
use O\DesignPatterns\Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
   public function testNullObject()
   {
       $service = new Service(new NullLogger());
       $this->expectOutputString(null);
       $service->doSomething();
   }

   public function testStandardLogger()
   {
       $service = new Service(new PrintLogger());

       $this->expectOutputString('We are in O\DesignPatterns\Behavioral\NullObject\Service::doSomething');
       $service->doSomething();

   }
}
