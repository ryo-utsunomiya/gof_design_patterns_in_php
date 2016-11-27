<?php

namespace Strategy;

interface StrategyInterface
{
    /**
     * @return Hand
     */
    public function nextHand();

    /**
     * @param bool $win
     * @return void
     */
    public function study($win);
}