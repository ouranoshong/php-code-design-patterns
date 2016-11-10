<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-10
 * Time: 下午10:54
 */

namespace O\Tests;


use PHPUnit\Framework\TestCase;

use O\DesignPatterns\More\Delegation;

class DelegationTest extends TestCase
{
    public function testHowTeamLeadWriteCode()
    {
        $junior = new Delegation\JuniorDeveloper();
        $teamLead = new Delegation\TeamLead($junior);

        $this->assertEquals($junior->writeBadCode(), $teamLead->writeCode());
    }
}
