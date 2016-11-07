<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-7
 * Time: 下午10:24
 */

namespace O\DesignPatterns\Structural\Facade;


class Facade
{
    private $os;
    private $bios;

    public function __construct(BiosInterface $bios, OsInterface $os)
    {
        $this->os = $os;
        $this->bios = $bios;
    }

    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}
