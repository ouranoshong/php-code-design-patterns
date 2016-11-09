<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/9/16
 * Time: 2:16 PM
 */

namespace O\DesignPatterns\Behavioral\Mediator\Subsystem;


use O\DesignPatterns\Behavioral\Mediator\Colleague;

class Server extends Colleague
{
    public function process()
    {
        $data = $this->mediator->queryDb();
        $this->mediator->sendResponse(sprintf("Hello %s", $data));
    }
}
