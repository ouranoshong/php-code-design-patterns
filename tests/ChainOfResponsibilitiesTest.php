<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/8/16
 * Time: 3:39 PM
 */

namespace O\Tests;


use O\DesignPatterns\Behavioral\ChainOfResponsibilities\Response\FastStorage;
use O\DesignPatterns\Behavioral\ChainOfResponsibilities\Response\SlowStorage;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilitiesTest extends TestCase
{
    private $chain;

    public function setUp()
    {
        $this->chain = new FastStorage(
            ['/foo/bar?index=1' => 'Hello In Memory!'],
            new SlowStorage()
        );
    }

    public function testCanRequestKeyInFastStorage()
    {
        $uri = $this->createMock('Psr\Http\Message\UriInterface');
        $uri->method('getPath')->willReturn('/foo/bar');
        $uri->method('getQuery')->willReturn('index=1');

        $request = $this->createMock('Psr\Http\Message\RequestInterface');
        $request->method('getMethod')
            ->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        $this->assertEquals('Hello In Memory!', $this->chain->handle($request));
    }

    public function testCanRequestKeyInSlowStorage()
    {
        $uri = $this->createMock('Psr\Http\Message\UriInterface');
        $uri->method('getPath')->willReturn('/foo/baz');
        $uri->method('getQuery')->willReturn('');

        $request = $this->createMock('Psr\Http\Message\RequestInterface');
        $request->method('getMethod')
            ->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        $this->assertEquals('Hello World!', $this->chain->handle($request));
    }
}
