<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午4:43
 */

namespace O\Tests;


use O\DesignPatterns\Creational\Multiton\Multiton;
use PHPUnit\Framework\TestCase;

class MultitonTest extends TestCase
{
     public function testCanGetSameInstanceBySameInstanceName()
     {
         $first = Multiton::getInstance(Multiton::INSTANCE_1);

         $this->assertSame($first, Multiton::getInstance(Multiton::INSTANCE_1));
     }


     public function testCanNotCloneMultiton()
     {
         try {
             $Multi = new Multiton();

             $MultiClone = clone $Multi;
         } catch (\Error $e) {
               $this->assertContains('Call to private O\DesignPatterns\Creational\Multiton\Multiton::__clone()', $e->getMessage());
         }

     }

    public function testCanNotUnserializeMultiton()
    {
        try {
            $MultiSe = serialize(new Multiton());

            $MultiClone = unserialize($MultiSe);
        } catch (\Exception $e) {
            $this->assertContains('Invalid callback O\DesignPatterns\Creational\Multiton\Multiton::__wakeup', $e->getMessage());
        }

    }
}
