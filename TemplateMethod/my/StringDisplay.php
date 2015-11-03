<?php

namespace TemplateMethod\my;

class StringDisplay extends AbstractDisplay
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
     * @param string $string
     * @throws \InvalidArgumentException When $char is not string or longer than 1 character.
     */
    public function __construct($string)
    {
        if (is_string($string)) {
            $this->string = $string;
            $this->width  = strlen($string);
        } else {
            throw new \InvalidArgumentException();
        }
    }

    protected function open()
    {
        $this->printLine();
    }

    protected function show()
    {
        echo '|' . $this->string . '|' . PHP_EOL;
    }

    protected function close()
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
