<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/4/16
 * Time: 4:36 PM
 */

namespace O\DesignPatterns\Creational\AbstractFactory;


class JsonFactory extends AbstractFactory
{
    public function createText(string $content): Text
    {
        return new JsonText($content);
    }

}
