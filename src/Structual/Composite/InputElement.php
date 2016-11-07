<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 11:29 AM
 */

namespace O\DesignPatterns\Structual\Composite;


class InputElement implements RenderableInterface
{

    public function render(): string
    {
        return '<input type="text" />';
    }
}
