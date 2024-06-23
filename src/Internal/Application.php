<?php

namespace Ibra\Facade\Internal;

use Ibra\Facade\Internal\HelloFacade;

/**
 * Class Application
 * @package Ibra\Facade\Internal
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
