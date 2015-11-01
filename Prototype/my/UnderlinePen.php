<?php

namespace my;

use my\PrototypeFramework\Product;

class UnderlinePen implements Product
{
    /**
     * @var string
     */
    private $ulChar;

    /**
     * @param $ulChar
     */
    public function __construct($ulChar)
    {
        $ulChar = (string)$ulChar;
        $this->ulChar = $ulChar[0];
    }

    /**
     * @param string $s
     */
    public function display($s)
    {
        $length  = strlen($s);
        echo '"' . $s . '"' . PHP_EOL;
        echo ' ';
        for ($i = 0; $i < $length; $i++) {
            echo $this->ulChar;
        }
        echo PHP_EOL;
    }
}
