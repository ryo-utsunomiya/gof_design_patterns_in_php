<?php

namespace Memento;

class Memento
{
    /**
     * @var int
     */
    private $money;

    /**
     * @var array
     */
    private $fruits = [];

    /**
     * Memento constructor.
     * @param int $money
     */
    public function __construct($money)
    {
        $this->money = $money;
    }
    
    /**
     * @return int
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param string $fruit
     */
    public function addFruit($fruit)
    {
        $this->fruits[] = $fruit;
    }

    /**
     * @return array
     */
    public function getFruits()
    {
        return $this->fruits;
    }
}