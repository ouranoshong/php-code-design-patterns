<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/8/16
 * Time: 1:57 PM
 */

namespace O\DesignPatterns\Structural\Flyweight;


interface FlyweightInterface
{
    public function render(string $extrinsicState): string;
}
