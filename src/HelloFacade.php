<?php

namespace Ibra\Facade;

/**
 * Class HelloFacade
 * @package Ibra\Facade
 *
 * This is real implementation of Hello class, and it contains the whole logic.
 */
class HelloFacade
{
    public static function sayHello(string $name): void
    {
        /**
         * Heavily complex logic.
         */
        echo "Hello, $name!";
    }
}
