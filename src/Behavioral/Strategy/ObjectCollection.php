<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/10/16
 * Time: 11:33 AM
 */

namespace O\DesignPatterns\Behavioral\Strategy;

class ObjectCollection
{
    private $elements;

    private $comparator;

    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    public function sort(): array
    {
        if (!$this->comparator) {
            throw new \LogicException('Comparator is not set');
        }

        usort($this->elements, [$this->comparator, 'compare']);

        return $this->elements;
    }

    /**
     * @param ComparatorInterface $comparator
     */
    public function setComparator(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }
}
