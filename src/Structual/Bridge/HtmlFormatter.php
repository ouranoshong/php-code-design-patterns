<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/7/16
 * Time: 10:53 AM
 */

namespace O\DesignPatterns\Structual\Bridge;


class HtmlFormatter implements FormatterInterface
{

    public function format(string $text)
    {
        return sprintf('<p>%s</p>', $text);
    }
}
