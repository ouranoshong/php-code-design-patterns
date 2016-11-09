<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/9/16
 * Time: 10:44 AM
 */

namespace O\DesignPatterns\Behavioral\Mediator\Subsystem;


use O\DesignPatterns\Behavioral\Mediator\Colleague;

class Client extends Colleague
{
    public function request()
    {
        $this->mediator->makeRequest();
    }

    public function output(string $content)
    {
        echo $content;
    }
}
