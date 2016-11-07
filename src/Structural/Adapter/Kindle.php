<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 10:37 AM
 */

namespace O\DesignPatterns\Structural\Adapter;


class Kindle implements EBookInterface
{
    private $page = 1;

    private $totalPages = 100;

    public function unlock()
    {
        $this->page = 1;
    }

    public function pressNext()
    {
        $this->page++;
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
