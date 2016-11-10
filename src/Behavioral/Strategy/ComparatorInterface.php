<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/10/16
 * Time: 11:36 AM
 */

namespace O\DesignPatterns\Behavioral\Strategy;


interface ComparatorInterface
{
    public function compare($a, $b): int;
}
