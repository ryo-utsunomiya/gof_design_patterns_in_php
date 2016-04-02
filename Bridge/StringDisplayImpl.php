<?php

namespace Bridge;

class StringDisplayImpl extends DisplayImpl
{
    /**
     * @var string
     */
    private $string;

    /**
     * @var int
     */
    private $width;

    /**
     * StringDisplayImpl constructor.
     *
     * @param string $string
     */
    public function __construct($string)
    {
        $this->string = $string;
        $this->width = mb_strlen($string);
    }

    public function rawOpen()
    {
        $this->printLine();
    }

    public function rawShow()
    {
        echo '|' . $this->string . '|' . PHP_EOL;
    }

    public function rawClose()
    {
        $this->printLine();
    }
    
    private function printLine()
    {
        echo '+';

        for ($i = 0; $i < $this->width; $i++) {
            echo '-';
        }

        echo '+' . PHP_EOL;
    }
}
