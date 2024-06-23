<?php

use Ibra\Facade\Facade;

require_once 'bootstrap.php';

/**
 * class Hello
 * @package Ibra\Facade
 *
 * This is the facade class that will be used by the user to access the HelloFacade class.
 *
 * @method static void sayHello(string $name): void
 */
class Hello extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor(): string
    {
        return 'hello';
    }
}

Hello::sayHello('Ibra');
