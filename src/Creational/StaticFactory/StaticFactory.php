<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 16-11-6
 * Time: 下午9:39
 */

namespace O\DesignPatterns\Creational\StaticFactory;


final class StaticFactory
{
    public static function factory(string $type): FormatterInterface
    {
        if ($type === 'string') {
            return new FormatString();
        }

        if ($type === 'number') {
            return new FormatNumber();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}
