<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 11:26 AM
 */

namespace O\DesignPatterns\Structual\Composite;


class Form implements RenderableInterface
{

    private $elements;

    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }

}
