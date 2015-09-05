<?php

namespace my;

class Singleton
{
    /**
     * @var Singleton
     */
    private static $singleton;

    private function __construct()
    {
    }

    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if (!self::$singleton instanceof self) {
            self::$singleton = new self();
            echo 'Instance is generated.', PHP_EOL;
        }

        return self::$singleton;
    }
}
