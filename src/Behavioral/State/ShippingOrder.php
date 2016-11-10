<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/10/16
 * Time: 10:21 AM
 */

namespace O\DesignPatterns\Behavioral\State;


class ShippingOrder implements OrderInterface
{

    private $details;

    public function __construct(array $details)
    {
        $this->details = $details;
    }

    public function shipOrder()
    {
        throw new \Exception('Can not ship the order which status is shipping!');
    }

    public function completeOrder()
    {
        $this->details['status'] = 'completed';
        $this->details['updatedTime'] = time();
    }

    public function getStatus(): string
    {
        return $this->details['status'];
    }
}
