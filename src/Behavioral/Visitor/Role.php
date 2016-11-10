<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/10/16
 * Time: 2:16 PM
 */

namespace O\DesignPatterns\Behavioral\Visitor;


interface RoleInterface
{
    public  function accept(RoleVisitorInterface $visitor);
}
