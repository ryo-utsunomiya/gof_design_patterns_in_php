<?php

namespace Observer;

class RandomNumberGenerator extends NumberGenerator
{
    /**
     * @var int
     */
    private $number;
    
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
        for ($i = 0; $i < 20; $i++) {
            $this->number = mt_rand(1, 50);
            $this->notify();
        }
    }
}