<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 1:35 PM
 */

namespace O\DesignPatterns\Structural\DataMapper;


class UserMapper
{
    private $adapter;

    public function __construct(StorageAdapter $storageAdapter)
    {
        $this->adapter = $storageAdapter;
    }

    public function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }

    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new \InvalidArgumentException("User #$id not found");
        }

        return $this->mapRowToUser($result);
    }

}
