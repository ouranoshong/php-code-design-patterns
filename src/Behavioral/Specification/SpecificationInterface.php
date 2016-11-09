<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-9
 * Time: 下午9:30
 */

namespace O\DesignPatterns\Behavioral\Specification;


interface SpecificationInterface
{
     public function isSatisfiedBy(Item $item): bool;
}
