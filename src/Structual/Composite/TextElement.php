<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 11:30 AM
 */

namespace O\DesignPatterns\Structual\Composite;


class TextElement implements RenderableInterface
{
    private  $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return $this->text;
    }
}
