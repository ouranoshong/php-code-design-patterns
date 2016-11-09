<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-9
 * Time: 下午9:58
 */

namespace O\Tests;


use O\DesignPatterns\Behavioral\Specification\AndSpecification;
use O\DesignPatterns\Behavioral\Specification\Item;
use O\DesignPatterns\Behavioral\Specification\NotSpecification;
use O\DesignPatterns\Behavioral\Specification\OrSpecification;
use O\DesignPatterns\Behavioral\Specification\PriceSpecification;
use PHPUnit\Framework\TestCase;

class SpecificationTest extends TestCase
{
    public function testCanOr()
    {
        $spe1 = new PriceSpecification(50, 90);
        $spe2 = new PriceSpecification(101, 200);

        $orSpec = new OrSpecification($spe1, $spe2);

        $this->assertFalse($orSpec->isSatisfiedBy(new Item(100)));
        $this->assertTrue($orSpec->isSatisfiedBy(new Item(51)));
        $this->assertTrue($orSpec->isSatisfiedBy(new Item(150)));
    }

    public function testCanAnd()
    {
        $spec1 = new PriceSpecification(50, 100);
        $spec2 = new PriceSpecification(80, 200);

        $orSpec = new AndSpecification($spec1, $spec2);

        $this->assertFalse($orSpec->isSatisfiedBy(new Item(150)));
        $this->assertFalse($orSpec->isSatisfiedBy(new Item(1)));
        $this->assertFalse($orSpec->isSatisfiedBy(new Item(51)));
        $this->assertTrue($orSpec->isSatisfiedBy(new Item(100)));
    }

    public function testCanNot()
    {
        $spec1 = new PriceSpecification(50, 100);
        $orSpec = new NotSpecification($spec1);

        $this->assertTrue($orSpec->isSatisfiedBy(new Item(150)));
        $this->assertFalse($orSpec->isSatisfiedBy(new Item(50)));
    }
}
