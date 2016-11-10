<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/10/16
 * Time: 10:24 AM
 */

namespace O\DesignPatterns\Behavioral\State;


class CreateOrder implements OrderInterface
{
    private $details;

    public function __construct(array $details)
    {
        $this->details = $details;
    }

    public function shipOrder()
    {
        $this->details['status'] = 'shipping';
        $this->details['updateTime'] = time();
    }

    public function completeOrder()
    {
        throw new \Exception('Can not complete the order which status is created');
    }

    public function getStatus(): string
    {
        return $this->details['status'];
    }
}
