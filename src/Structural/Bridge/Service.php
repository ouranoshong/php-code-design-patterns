<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 10:55 AM
 */

namespace O\DesignPatterns\Structural\Bridge;


use O\DesignPatterns\Structural\Bridge\FormatterInterface;

abstract class Service
{
    protected $implementation;

    public function __construct(FormatterInterface $printer)
    {
        $this->setImplementation($printer);
    }

    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();
}
