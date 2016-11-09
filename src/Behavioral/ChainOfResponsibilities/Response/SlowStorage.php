<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/8/16
 * Time: 3:33 PM
 */

namespace O\DesignPatterns\Behavioral\ChainOfResponsibilities\Response;


use O\DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;


class SlowStorage extends Handler
{

    protected function processing(RequestInterface $request)
    {
        return 'Hello World!';
    }
}
