<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/10/16
 * Time: 11:16 AM
 */

namespace O\Tests;


use O\DesignPatterns\Behavioral\State\OrderRepository;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testCanShipCreatedOrder()
    {
        $order =  (new OrderRepository())->findById(1);
        $order->shipOrder();

        $this->assertEquals('shipping', $order->getStatus());
    }

    public function testCanCompleteShippedOrder()
    {
        $order = (new OrderRepository())->findById(2);
        $order->completeOrder();
        $this->assertEquals('completed', $order->getStatus());
    }
    /**
     * @expectedException \Exception
     */
    public function testThrowsExceptionWhenTryingToCompleteCreatedOrder()
    {
        $order = (new OrderRepository())->findById(1);
        $order->completeOrder();
    }
}
