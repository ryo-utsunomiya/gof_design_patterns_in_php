<?php

namespace State\my;

class NightState implements State
{
    /**
     * @var NightState
     */
    private static $singleton;

    private function __construct()
    {
    }

    /**
     * @return NightState
     */
    public static function getInstance()
    {
        if (is_null(self::$singleton)) {
            self::$singleton = new self();
        }

        return self::$singleton;
    }

    /**
     * @param Context $context
     * @param int     $hour
     */
    public function doClock(Context $context, $hour)
    {
        if (DayState::isDay($hour)) {
            $context->changeState(DayState::getInstance());
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return '[night]';
    }
}
