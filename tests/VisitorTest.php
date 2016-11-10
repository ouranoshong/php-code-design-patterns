<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/10/16
 * Time: 2:20 PM
 */

namespace O\Tests;


use O\DesignPatterns\Behavioral\Visitor;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    /**
     * @var Visitor\RoleVisitor
     */
    private $visitor;

    public function setUp()
    {
        $this->visitor = new Visitor\RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            [new Visitor\User('hong')],
            [new Visitor\Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     *
     * @param Visitor\RoleInterface $role
     */
    public function testVisitSomeRole(Visitor\RoleInterface $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }

    public function testCanGetUserName()
    {
        $User = new Visitor\User('hong');
        $this->assertContains('hong', $User->getName());
    }

    public function testCanGetGroupName()
    {
        $Group = new Visitor\Group('Admin');
        $this->assertContains('admin', $Group->getName());

    }
}
