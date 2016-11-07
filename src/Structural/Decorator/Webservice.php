<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 2:12 PM
 */

namespace O\DesignPatterns\Structural\Decorator;


class Webservice implements RenderableInterface
{

    private $data;

    public function renderData(): string
    {
        return $this->data;
    }

    public function __construct(string $data)
    {
        $this->data = $data;
    }
}
