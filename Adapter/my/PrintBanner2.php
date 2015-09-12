<?php

namespace my;

class PrintBanner2 extends AbstractPrint
{
    /**
     * @var Banner
     */
    private $banner;

    /**
     * @param string $string
     */
    public function __construct($string)
    {
        $this->banner = new Banner((string)$string);
    }

    public function printWeak()
    {
        $this->banner->showWithParen();
    }

    public function printStrong()
    {
        $this->banner->showWithAster();
    }
}
