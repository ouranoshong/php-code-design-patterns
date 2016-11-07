<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 2:28 PM
 */

namespace O\Tests;


use PHPUnit\Framework\TestCase;

use O\DesignPatterns\Structural\Decorator;

class DecoratorTest extends TestCase
{
    private $service;

    public function setUP()
    {
        $this->service = new Decorator\Webservice('foobar');
    }

    public function testJsonDecorator()
    {
        $service = new Decorator\JsonRenderer($this->service);
        $this->assertSame('"foobar"', $service->renderData());
    }

    public function testXmlDecorator()
    {
        $service = new Decorator\XmlRenderer($this->service);

        $doc = new \DOMDocument();
        $doc->appendChild($doc->createElement('content', 'foobar'));

        $xml = $doc->saveXML();

        $this->assertEquals($xml, str_replace("\r\n","", $service->renderData()));
    }
}
