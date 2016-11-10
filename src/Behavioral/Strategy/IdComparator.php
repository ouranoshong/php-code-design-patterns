<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/10/16
 * Time: 11:44 AM
 */

namespace O\DesignPatterns\Behavioral\Strategy;


class IdComparator implements ComparatorInterface
{

    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}
