<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-10
 * Time: 下午10:39
 */

namespace O\DesignPatterns\More\Delegation;


class TeamLead
{
    private $junior;

    public function __construct(JuniorDeveloper $junior)
    {
        $this->junior =  $junior;
    }

    public function writeCode()
    {
        return $this->junior->writeBadCode();
    }
}
