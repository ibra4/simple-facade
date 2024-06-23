<?php

namespace Ibra\Facade;

use RuntimeException;

/**
 * Class Facade
 * @package Ibra\Facade
 */
abstract class Facade
{
    /**
     * Handle dynamic, static calls to the object.
     *
     * @param string $method
     * @param array $args
     * @return mixed
     */
    public static function __callStatic($method, $args)
    {
        $accessor = static::getFacadeAccessor();

        if (!isset(Application::$app[$accessor])) {
            throw new RuntimeException('A facade accessor has not been set.');
        }

        $instance = Application::$app[$accessor];

        return $instance->$method(...$args);
    }

    /**
     * Get the facade accessor, which is the key in the Application::$app array.
     *
     * @return string
     */
    abstract protected static function getFacadeAccessor(): string;
}
