<?php

namespace AbstractFactory\Framework;

abstract class Link extends Item
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @param string $caption
     * @param string $url
     */
    public function __construct($caption, $url)
    {
        parent::__construct($caption);
        $this->url = (string)$url;
    }
}
