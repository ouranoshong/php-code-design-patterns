<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-9
 * Time: 下午9:29
 */

namespace O\DesignPatterns\Behavioral\Specification;


class Item
{
    private $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
