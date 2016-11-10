<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/10/16
 * Time: 10:19 AM
 */

namespace O\DesignPatterns\Behavioral\State;


interface OrderInterface
{
    public function shipOrder();

    public function completeOrder();

    public function getStatus(): string;

}
