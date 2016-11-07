<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-7
 * Time: 下午10:25
 */

namespace O\DesignPatterns\Structural\Facade;


interface OsInterface
{
    public function halt();

    public function getName(): string;
}
