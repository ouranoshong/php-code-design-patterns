<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 1:37 PM
 */

namespace O\DesignPatterns\Structural\DataMapper;


class StorageAdapter
{
    private $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function find(int $id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }
}
