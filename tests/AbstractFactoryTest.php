<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/4/16
 * Time: 4:45 PM
 */

namespace O\Tests;


use O\DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use O\DesignPatterns\Creational\AbstractFactory\JsonFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateHtmlText()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('text');

        $this->assertInstanceOf('O\DesignPatterns\Creational\AbstractFactory\HtmlText', $text);
    }

    public function testCanCreateJsonText()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('text');

        $this->assertInstanceOf('O\DesignPatterns\Creational\AbstractFactory\JsonText', $text);
    }
}
