<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-9
 * Time: 下午8:22
 */

namespace O\DesignPatterns\Behavioral\NullObject;


class Service
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
         $this->logger = $logger;
    }

    public function doSomething()
    {
        $this->logger->log('We are in '.__METHOD__);
    }
}
