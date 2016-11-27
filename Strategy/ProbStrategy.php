<?php

namespace Strategy;

class ProbStrategy implements StrategyInterface
{
    /**
     * @var int
     */
    private $prevHandValue = Hand::GUU;

    /**
     * @var int
     */
    private $currentHandValue = Hand::GUU;

    /**
     * @var array
     */
    private $history = [
        Hand::GUU => [1, 1, 1],
        Hand::CHO => [1, 1, 1],
        Hand::PAA => [1, 1, 1],
    ];

    /**
     * @return Hand
     */
    public function nextHand()
    {
        $bet = mt_rand(0, $this->getSum($this->currentHandValue));

        if ($bet < $this->history[$this->currentHandValue][0]) {
            $handValue = Hand::GUU;
        } elseif ($bet < $this->history[$this->currentHandValue][0] + $this->history[$this->currentHandValue][1]) {
            $handValue = Hand::CHO;
        } else {
            $handValue = Hand::PAA;
        }

        $this->prevHandValue = $this->currentHandValue;
        $this->currentHandValue = $handValue;

        return Hand::getHand($handValue);
    }

    /**
     * @param bool $win
     */
    public function study($win)
    {
        if ($win) {
            $this->history[$this->prevHandValue][$this->currentHandValue]++;
        } else {
            $this->history[$this->prevHandValue][($this->currentHandValue + 1) % 3]++;
            $this->history[$this->prevHandValue][($this->currentHandValue + 2) % 3]++;
        }
    }

    /**
     * @param int $handValue
     * @return int
     */
    private function getSum($handValue)
    {
        $sum = 0;

        if (!isset($this->history[$handValue])) {
            throw new \InvalidArgumentException();
        }

        foreach ($this->history[$handValue] as $v) {
            $sum += $v;
        }

        return $sum;
    }
}