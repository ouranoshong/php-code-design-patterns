<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 10:55 AM
 */

namespace O\DesignPatterns\Structual\Bridge;


use O\DesignPatterns\Creational\StaticFactory\FormatterInterface;

abstract class Service
{
    protected $implementation;

    public function __construct(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();
}
