<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/8/16
 * Time: 2:23 PM
 */

namespace O\DesignPatterns\Structural\Proxy;

/**
 * Class Record
 *
 * @package O\DesignPatterns\Structural\Proxy
 *
 * @property string username
 */
class Record
{
    private $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @param string $name
     * @param string  $value
     */
    public function __set(string $name, string $value)
    {
        $this->data[$name] = $value;
    }

    public function __get(string $name): string
    {
        if (!isset($this->data[$name])) {
            throw new \OutOfRangeException('Invalid name given');
        }

        return $this->data[$name];
    }

}
