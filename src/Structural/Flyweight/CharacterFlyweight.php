<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/8/16
 * Time: 2:03 PM
 */

namespace O\DesignPatterns\Structural\Flyweight;


class CharacterFlyweight implements FlyweightInterface
{

    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(string $extrinsicState): string
    {
        return sprintf('Character %s with font %s', $this->name, $extrinsicState);
    }
}
