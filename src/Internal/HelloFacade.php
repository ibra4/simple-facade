<?php

namespace Ibra\Facade\Internal;

/**
 * Class HelloFacade
 * @package Ibra\Facade\Internal
 *
 * This is real implementation of Hello class, and it contains the whole logic.
 */
class HelloFacade
{
    public static function sayHello(string $name): void
    {
        echo "Hello, $name!";
    }
}
