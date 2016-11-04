<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/4/16
 * Time: 4:42 PM
 */

namespace O\DesignPatterns\Creational\AbstractFactory;


class HtmlFactory extends AbstractFactory
{
    public function createText(string $content): Text
    {
        return new HtmlText($content);
    }

}
