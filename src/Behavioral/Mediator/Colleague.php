<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/9/16
 * Time: 10:43 AM
 */

namespace O\DesignPatterns\Behavioral\Mediator;


/**
 * Class Colleague
 *
 * @package O\DesignPatterns\Behavioral\Mediator
 */
abstract class Colleague
{

    /**
     * @var MediatorInterface
     */
    protected $mediator;

    /**
     * @param \O\DesignPatterns\Behavioral\Mediator\MediatorInterface $mediator
     */
    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
}
