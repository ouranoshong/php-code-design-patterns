<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-9
 * Time: 下午8:46
 */

namespace O\DesignPatterns\Behavioral\Observer;


class UserObserver implements \SplObserver
{
    private $subjects = [];

    public function update(\SplSubject $subject)
    {
        $this->subjects[] = clone $subject;
    }

    public function getChangedUsers()
    {
        return $this->subjects;
    }
}
