<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 1:41 PM
 */

namespace O\Tests;


use O\DesignPatterns\Structural\DataMapper\StorageAdapter;
use O\DesignPatterns\Structural\DataMapper\UserMapper;
use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([1 => ['username'=> 'domnikl', 'email'=>'liebler.dominik@gmail.com']]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findByid(1);

        $this->assertInstanceOf('O\DesignPatterns\Structural\DataMapper\User', $user);

    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWillNotMapInvalidData()
    {
        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findByid(1);
    }
}
