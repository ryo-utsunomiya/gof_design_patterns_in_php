<?php

namespace Strategy;

class WinningStrategy implements StrategyInterface
{
    /**
     * @var bool
     */
    private $won = false;

    /**
     * @var Hand
     */
    private $prevHand;

    /**
     * @return Hand
     */
    public function nextHand()
    {
        if (!$this->won) {
            $this->prevHand = Hand::getHand(mt_rand(0, 2));
        }

        return $this->prevHand;
    }

    /**
     * @param bool $win
     */
    public function study($win)
    {
        $this->won = $win;
    }
}