<?php

namespace Singleton\my;

class Singleton
{
    /**
     * @var Singleton
     */
    private static $singleton;

    private function __construct() { }

    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if (is_null(self::$singleton)) {
            self::$singleton = new self();
            echo 'Instance is generated.', PHP_EOL;
        }

        return self::$singleton;
    }
}
