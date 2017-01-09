<?php

namespace Observer;

class IncrementalNumberGenerator extends NumberGenerator
{
    /**
     * @var int
     */
    private $number;

    /**
     * @var int
     */
    private $max;

    /**
     * @var int
     */
    private $step;

    /**
     * IncrementalNumberGenerator constructor.
     * @param int $min
     * @param int $max
     * @param int $step
     */
    public function __construct($min, $max, $step)
    {
        if (!is_int($min) || !is_int($max) || !is_int($step)) {
            throw new \InvalidArgumentException();
        }

        $this->number = $min;
        $this->max = $max;
        $this->step = $step;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return void
     */
    public function execute()
    {
        while ($this->nextInt() <= $this->max) {
            $this->number = $this->nextInt();
            $this->notify();
        }
    }

    /**
     * @return int
     */
    private function nextInt()
    {
        return $this->number + $this->step;
    }
}