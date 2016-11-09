<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-9
 * Time: 下午9:37
 */

namespace O\DesignPatterns\Behavioral\Specification;


class AndSpecification implements SpecificationInterface
{
    /**
     * @var SpecificationInterface[]
     */
    private $specifications;

    /**
     * @param SpecificationInterface[] ...$specifications
     */
    public function __construct(SpecificationInterface ...$specifications)
    {
        $this->specifications = $specifications;
    }

    public function isSatisfiedBy(Item $item): bool
    {
        $satisfied = [];

        foreach ($this->specifications as $specification) {
            $satisfied[] = $specification->isSatisfiedBy($item);
        }

        return !in_array(false, $satisfied);
    }
}
