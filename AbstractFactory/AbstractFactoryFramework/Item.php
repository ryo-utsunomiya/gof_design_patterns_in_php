<?php

namespace AbstractFactoryFramework;

abstract class Item
{
    /**
     * @var string
     */
    protected $caption;

    /**
     * @param string $caption
     */
    public function __construct($caption)
    {
        $this->caption = (string)$caption;
    }

    public abstract function makeHTML();
}
