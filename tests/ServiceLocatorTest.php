<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-10
 * Time: 下午11:05
 */

namespace O\Tests;


use O\DesignPatterns\More\ServiceLocator\LogService;
use O\DesignPatterns\More\ServiceLocator\ServiceLocator;
use PHPUnit\Framework\TestCase;

class ServiceLocatorTest extends TestCase
{
    /**
     * @var ServiceLocator
     */
    private $serviceLocator;

    public function setUp()
    {
        $this->serviceLocator = new ServiceLocator();
    }

    public function testHasServices()
    {
        $this->serviceLocator->addInstance(LogService::class, new LogService());

        $this->assertTrue($this->serviceLocator->has(LogService::class));
        $this->assertFalse($this->serviceLocator->has(self::class));
    }

    public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet()
    {
        $this->serviceLocator->addClass(LogService::class, []);
        $logger = $this->serviceLocator->get(LogService::class);

        $this->assertInstanceOf('O\DesignPatterns\More\ServiceLocator\LogService', $logger);
    }

    public function testGetWillInstantiateWithMultiArgs()
    {
        $this->serviceLocator->addClass(TestOneArgs::class, ['test']);
        $test = $this->serviceLocator->get(TestOneArgs::class);

        $this->assertAttributeEquals('test', 'test', $test);

        $this->serviceLocator->addClass(TestTwoArgs::class, ['test', 'test1']);
        $test = $this->serviceLocator->get(TestTwoArgs::class);

        $this->assertAttributeEquals('test', 'test1', $test);
        $this->assertAttributeEquals('test1', 'test2', $test);

        $this->serviceLocator->addClass(TestThreeArgs::class, ['test1', 'test2', 'test3']);
        $test = $this->serviceLocator->get(TestThreeArgs::class);

        $this->assertAttributeEquals('test1', 'test1', $test);
        $this->assertAttributeEquals('test2', 'test2', $test);
        $this->assertAttributeEquals('test3', 'test3', $test);
    }

    /**
     * @expectedException \OutOfRangeException
     */
    public function testThrowsTooManyException()
    {
        $this->serviceLocator->addClass(TestThreeArgs::class, ['test1', 'test2', 'test3', 'test4']);
        $this->serviceLocator->get(TestThreeArgs::class);
    }

    public function testGetWillInstantiateShared()
    {
        $logService = new LogService();

        $this->serviceLocator->addInstance(LogService::class, $logService);
        $logService1 = $this->serviceLocator->get(LogService::class);

        $this->assertSame($logService, $logService1);

    }
}

class TestOneArgs
{
    private $test;

    public function __construct($test)
    {
         $this->test = $test;
    }
}

class TestTwoArgs
{
    private $test1;
    private $test2;

    public function __construct($test1, $test2)
    {
        $this->test1 = $test1;
        $this->test2 = $test2;
    }
}

class TestThreeArgs
{
    private $test1;
    private $test2;
    private $test3;

    public function __construct($test1, $test2, $test3)
    {
        $this->test1 = $test1;
        $this->test2 = $test2;
        $this->test3 = $test3;
    }
}
