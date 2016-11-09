<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/8/16
 * Time: 3:36 PM
 */

namespace O\DesignPatterns\Behavioral\ChainOfResponsibilities\Response;


use O\DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

class FastStorage extends Handler
{

    private $data;

    public function __construct(array $data, Handler $handler)
    {
        parent::__construct($handler);

        $this->data = $data;
    }

    protected function processing(RequestInterface $request)
    {
        $key = sprintf(
            '%s?%s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if ($request->getMethod() == 'GET' && isset($this->data[$key])) {
            return $this->data[$key];
        }

        return null;
    }
}
