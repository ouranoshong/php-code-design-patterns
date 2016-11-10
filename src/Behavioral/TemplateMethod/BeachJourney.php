<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/10/16
 * Time: 1:54 PM
 */

namespace O\DesignPatterns\Behavioral\TemplateMethod;


class BeachJourney extends Journey
{

    protected function enjoyVacation(): string
    {
        return "Swimming and sun-bathing";
    }
}
