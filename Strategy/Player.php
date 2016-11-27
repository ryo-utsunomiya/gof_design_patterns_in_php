<?php

namespace Strategy;

class Player
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var StrategyInterface
     */
    private $strategy;

    /**
     * @var int
     */
    private $winCount, $loseCount, $gameCount;

    /**
     * Player constructor.
     * @param string $name
     * @param StrategyInterface $strategy
     */
    public function __construct($name, StrategyInterface $strategy)
    {
        $this->name = $name;
        $this->strategy = $strategy;
    }

    /**
     * @return Hand
     */
    public function nextHand()
    {
        return $this->strategy->nextHand();
    }

    public function win()
    {
        $this->strategy->study(true);
        $this->winCount++;
        $this->gameCount++;
    }

    public function lose()
    {
        $this->strategy->study(false);
        $this->loseCount++;
        $this->gameCount++;
    }

    public function even()
    {
        $this->gameCount++;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf(
            '[%s:%d games, %d win, %d lose]',
            $this->name,
            $this->gameCount,
            $this->winCount,
            $this->loseCount
        );
    }
}