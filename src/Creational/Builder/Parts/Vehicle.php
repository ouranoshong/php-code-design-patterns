<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-4
 * Time: 下午10:30
 */

namespace O\DesignPatterns\Creational\Builder\Parts;


/**
 * Class Vehicle
 *
 * @package O\DesignPatterns\Creational\Builder\Parts
 */
abstract class Vehicle
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * @param $key
     * @param $value
     */
    public function setPart($key, $value)
    {
         $this->data[$key] = $value;
    }

}
