<?php

namespace State\my;

class Safe implements Context
{
    /**
     * @var State
     */
    private $state;

    /**
     * @param int $hour
     */
    public function __construct($hour)
    {
        var_dump(DayState::isDay($hour));

        if (DayState::isDay($hour)) {
            $this->state = DayState::getInstance();
        } else {
            $this->state = NightState::getInstance();
        }
    }

    /**
     * @param int $hour
     * @return void
     */
    public function setClock($hour)
    {
        $clockMessage = 'Now:';

        if ($hour < 10) {
            $clockMessage .= '0' . $hour . ':00';
        } else {
            $clockMessage .= $hour . ':00';
        }

        echo $clockMessage . $this->state . PHP_EOL;
        $this->state->doClock($this, $hour);
    }

    /**
     * @param State $state
     * @return void
     */
    public function changeState(State $state)
    {
        echo 'State is changed from ' . $this->state . ' to ' . $state . PHP_EOL;
        $this->state = $state;
    }
}
