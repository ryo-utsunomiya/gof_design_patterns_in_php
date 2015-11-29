<?php

namespace AbstractFactory\Framework;

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

    /**
     * @param $str
     * @return string
     */
    protected static function h($str)
    {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }

    public abstract function makeHTML();
}
