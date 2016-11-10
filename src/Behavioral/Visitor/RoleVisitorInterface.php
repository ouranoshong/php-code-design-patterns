<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/10/16
 * Time: 2:14 PM
 */

namespace O\DesignPatterns\Behavioral\Visitor;


interface RoleVisitorInterface
{
    public function visitUser(User $role);

    public function visitGroup(Group $group);
}
