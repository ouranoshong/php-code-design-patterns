<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 10:42 AM
 */

namespace O\Tests;


use O\DesignPatterns\Structual\Adapter\Book;
use O\DesignPatterns\Structual\Adapter\EBookAdapter;
use O\DesignPatterns\Structual\Adapter\Kindle;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }
}
