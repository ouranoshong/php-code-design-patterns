<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/9/16
 * Time: 9:37 AM
 */

namespace O\DesignPatterns\Behavioral\Command;


class Invoker
{
    /**
     * @var CommandInterface
     */
    private $command;

    public function setCommand(CommandInterface $cmd)
    {
        $this->command = $cmd;
    }

    public function run()
    {
        $this->command->execute();
    }
}
