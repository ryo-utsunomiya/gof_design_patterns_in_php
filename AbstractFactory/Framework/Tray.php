<?php

namespace AbstractFactory\Framework;

abstract class Tray extends Item
{
    /**
     * @var Item[]
     */
    protected $tray = [];

    /**
     * @param string $caption
     */
    public function __construct($caption)
    {
        parent::__construct($caption);
    }

    /**
     * @param Item $item
     */
    public function add(Item $item)
    {
        array_push($this->tray, $item);
    }
}
