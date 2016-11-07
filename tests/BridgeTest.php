<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 11:01 AM
 */

namespace O\Tests;

use O\DesignPatterns\Structual\Bridge\HelloWorldService;
use O\DesignPatterns\Structual\Bridge\HtmlFormatter;
use O\DesignPatterns\Structual\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrint()
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        $this->assertEquals('Hello World', $service->get());

        $service = new HelloWorldService(new HtmlFormatter());
        $this->assertEquals('<p>Hello World</p>', $service->get());
    }
}
