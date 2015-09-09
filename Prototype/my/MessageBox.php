<?php

namespace my;

use my\framework\Product;

class MessageBox implements Product
{
    /**
     * @var string
     */
    private $decoChar;

    /**
     * @param string $decoChar
     */
    public function __construct($decoChar)
    {
        $decoChar = (string)$decoChar;
        $this->decoChar = $decoChar[0];
    }

    /**
     * @param string $s
     */
    public function display($s)
    {
        $length = strlen($s);
        $this->printDecorateLine($length);
        $this->printLine($s);
        $this->printDecorateLine($length);
    }

    /**
     * @param string $s
     */
    private function printLine($s)
    {
        printf("%s %s %s\n", $this->decoChar, $s, $this->decoChar);
    }
    
    /**
     * @param int $length
     */
    private function printDecorateLine($length)
    {
        for ($i = 0; $i < $length + 4; $i++) {
            echo $this->decoChar;
        }
        echo PHP_EOL;
    }
}
