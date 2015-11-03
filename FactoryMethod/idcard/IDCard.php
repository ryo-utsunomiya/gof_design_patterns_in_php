<?php

namespace FactoryMethod\IDCard;

use FactoryMethod\Framework\Product;

class IDCard extends Product
{
    /**
     * @var string
     */
    private $owner;

    /**
     * @var int
     */
    private $serial;

    /**
     * @param $owner
     * @param $serial
     */
    public function __construct($owner, $serial)
    {
        if (!is_string($owner) || !ctype_digit((string)$serial)) {
            throw new \InvalidArgumentException();
        }

        printf("Making %s's card(No:%d).\n", $owner, $serial);
        $this->owner  = $owner;
        $this->serial = $serial;
    }

    public function useThis()
    {
        printf("Use %s's card(No:%d).\n", $this->owner, $this->serial);
    }

    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @return int
     */
    public function getSerial()
    {
        return $this->serial;
    }
}
