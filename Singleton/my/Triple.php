<?php

namespace my;

class Triple
{
    /**
     * @var Triple[]
     */
    private static $instances;

    private function __construct() { }

    /**
     * @param $id
     * @return Triple
     * @throws \OutOfRangeException
     */
    public static function getInstance($id)
    {
        if (is_null(self::$instances)) {
            self::$instances = [new self(), new self(), new self()];
        }

        if (isset(self::$instances[$id])) {
            return self::$instances[$id];
        } else {
            throw new \OutOfRangeException();
        }
    }
}
