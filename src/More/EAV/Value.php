<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/11/16
 * Time: 11:23 AM
 */

namespace O\DesignPatterns\More\EAV;


class Value
{
    private $name;

    private $attribute;

    public function __construct(Attribute $attribute, string $name)
    {
        $this->name = $name;
        $this->attribute = $attribute;

        $attribute->addValue($this);
    }

    public function __toString()
    {
        return sprintf('%s: %s', $this->attribute, $this->name);
    }
}
