<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/9/16
 * Time: 10:40 AM
 */

namespace O\DesignPatterns\Behavioral\Mediator;


use O\DesignPatterns\Behavioral\Mediator\Subsystem;

class Mediator implements MediatorInterface
{

    private $server;

    private $database;

    private $client;

    public function __construct(Subsystem\Database $database, Subsystem\Client $client, Subsystem\Server $server)
    {
        $this->database = $database;
        $this->server = $server;
        $this->client = $client;

        $this->database->setMediator($this);
        $this->server->setMediator($this);
        $this->client->setMediator($this);
    }

    public function sendResponse($content)
    {
        $this->client->output($content);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb(): string
    {
        return $this->database->getData();
    }

}
