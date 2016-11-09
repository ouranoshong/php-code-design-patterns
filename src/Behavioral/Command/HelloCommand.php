<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/9/16
 * Time: 9:33 AM
 */

namespace O\DesignPatterns\Behavioral\Command;


class HelloCommand implements CommandInterface
{
    private $output;

    public function __construct(Receiver $receiver)
    {
        $this->output = $receiver;
    }

    public function execute()
    {
        $this->output->write('Hello World');
    }
}
