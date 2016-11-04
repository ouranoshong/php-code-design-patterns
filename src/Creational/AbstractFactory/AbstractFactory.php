<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/4/16
 * Time: 4:34 PM
 */

namespace O\DesignPatterns\Creational\AbstractFactory;


abstract class AbstractFactory
{
    abstract public function createText(string $content): Text;
}
