<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/4/16
 * Time: 4:37 PM
 */

namespace O\DesignPatterns\Creational\AbstractFactory;


abstract class Text
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
