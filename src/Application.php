<?php

namespace Ibra\Facade;

use Ibra\Facade\HelloFacade;

/**
 * Class Application
 * @package Ibra\Facade
 */
class Application
{
    public static array $app = [];

    protected static array $facades = [
        'hello' => HelloFacade::class,
    ];

    /**
     * Initialize the application
     */
    public static function initialize(): void
    {
        self::registerFacades();
    }

    /**
     * Register the facades
     */
    protected static function registerFacades(): void
    {
        foreach (self::$facades as $key => $value) {
            self::$app[$key] = new $value();
        }
    }
}
