<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-9
 * Time: 下午8:51
 */

namespace O\Tests;


use O\DesignPatterns\Behavioral\Observer\User;
use O\DesignPatterns\Behavioral\Observer\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest  extends TestCase
{
       public function testChangeInUserLeadsToUserObserverBeingNotified()
       {
           $observer = new UserObserver();

           $user = new User();

           $user->attach($observer);

           $user->changeEmail('foo@bar.com');
           $this->assertCount(1, $observer->getChangedUsers());

           $user->detach($observer);
           $this->assertEquals(0, $this->getObjectAttribute($user, 'observers')->count());
       }
}
