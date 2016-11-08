<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/8/16
 * Time: 2:05 PM
 */

namespace O\DesignPatterns\Structural\Flyweight;


class FlyweightFactory implements \Countable
{
    private $pool;

    /**
     * @return mixed
     */
    public function get(string $name): CharacterFlyweight
    {
        if (!isset($this->pool[$name])) {
            $this->pool[$name] = new CharacterFlyweight($name);
        }

        return $this->pool[$name];
    }

    public function count()
    {
        return count($this->pool);
    }
}
