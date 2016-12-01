<?php

namespace ChainOfResponsibility;

class Trouble
{
    /**
     * @var int
     */
    private $number;

    /**
     * Trouble constructor.
     * @param int $number
     */
    public function __construct($number)
    {
        if (!is_int($number)) {
            throw new \InvalidArgumentException();
        }

        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('[Trouble %d]', $this->number);
    }
}