<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/9/16
 * Time: 10:38 AM
 */

namespace O\DesignPatterns\Behavioral\Mediator;


interface MediatorInterface
{

    public function sendResponse($content);

    public function makeRequest();

    public function queryDb(): string;

}
