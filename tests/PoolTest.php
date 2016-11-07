<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午6:22
 */

namespace O\Tests;


use O\DesignPatterns\Creational\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
     public function testCanGetNewInstancesWithGet()
     {
         $pool = new WorkerPool();
         $worker1 = $pool->get();
         $worker2 = $pool->get();

         $this->assertCount(2, $pool);
         $this->assertNotSame($worker1, $worker2);
         $this->assertSame('text', $worker1->run('txet'));
         $this->assertSame('text', $worker2->run('txet'));
     }

     public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
     {
         $pool = new WorkerPool();
         $worker1 = $pool->get();

         $pool->dispose($worker1);

         $worker2 = $pool->get();

         $this->assertCount(1, $pool);
         $this->assertSame($worker1, $worker2);

         $this->assertSame('text', $worker1->run('txet'));
         $this->assertSame('text', $worker2->run('txet'));
     }
}
