<?php

namespace State\my;

class DayState implements State
{
    /**
     * @var DayState
     */
    private static $singleton;

    private function __construct()
    {
    }

    /**
     * @return DayState
     */
    public static function getInstance()
    {
        if (is_null(self::$singleton)) {
            self::$singleton = new self();
        }

        return self::$singleton;
    }

    /**
     * @param int $hour
     * @return bool
     */
    public static function isDay($hour)
    {
        return 9 <= $hour && $hour < 17;
    }

    /**
     * @param Context $context
     * @param int     $hour
     */
    public function doClock(Context $context, $hour)
    {
        if (!self::isDay($hour)) {
            $context->changeState(NightState::getInstance());
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return '[day]';
    }
}
