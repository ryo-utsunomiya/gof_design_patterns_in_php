<?php

namespace Adapter\my;

class Banner
{
    /**
     * @var string
     */
    private $string;

    /**
     * @param $string
     */
    public function __construct($string)
    {
        $this->string = (string)$string;
    }

    public function showWithParen()
    {
        printf("(%s)\n", $this->string);
    }

    public function showWithAster()
    {
        printf("*%s*\n", $this->string);
    }
}
