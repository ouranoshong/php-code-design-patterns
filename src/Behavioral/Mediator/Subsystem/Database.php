<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/9/16
 * Time: 10:47 AM
 */

namespace O\DesignPatterns\Behavioral\Mediator\Subsystem;


use O\DesignPatterns\Behavioral\Mediator\Colleague;

class Database extends Colleague
{
    public function getData(): string
    {
        return 'World';
    }
}
