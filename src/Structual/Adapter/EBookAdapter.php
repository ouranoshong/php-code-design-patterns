<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 10:35 AM
 */

namespace O\DesignPatterns\Structual\Adapter;


class EBookAdapter implements BookInterface
{
    protected $eBook;

    public function __construct(EBookInterface $book)
    {
        $this->eBook = $book;
    }

    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}
