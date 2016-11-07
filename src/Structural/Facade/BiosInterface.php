<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-7
 * Time: 下午10:26
 */

namespace O\DesignPatterns\Structural\Facade;


interface BiosInterface
{
    public function execute();

    public function waitForKeyPress();

    public function launch(OsInterface $os);

    public function powerDown();
}
