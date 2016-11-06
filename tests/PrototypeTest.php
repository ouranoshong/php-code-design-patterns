<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午8:02
 */

namespace O\Tests;


use O\DesignPatterns\Creational\Prototype\BarBookPrototype;
use O\DesignPatterns\Creational\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest  extends TestCase
{
     public function testCanGetFooBook()
     {
         $FooBook = new FooBookPrototype();
         $BarBook = new BarBookPrototype();

         for($i = 0; $i <10; $i++){
             $book = clone $FooBook;
             $book->setTitle('Foo Book No ' . $i);
             $this->assertInstanceOf('O\DesignPatterns\Creational\Prototype\FooBookPrototype', $book);
         }

         for($i = 0; $i < 5; $i++){
             $book = clone $BarBook;
             $book->setTitle('Bar Book No ' . $i);
             $this->assertInstanceOf('O\DesignPatterns\Creational\Prototype\BarBookPrototype', $book);
         }
     }
}
