<?php

namespace my;

class CharDisplay extends AbstractDisplay
{
    /**
     * @var string
     */
    private $char;

    /**
     * @param $char
     * @throws \InvalidArgumentException When $char is not string or longer than 1 character.
     */
    public function __construct($char)
    {
        if (is_string($char) && mb_strlen($char) === 1) {
            $this->char = $char[0];
        } else {
            throw new \InvalidArgumentException();
        }
    }

    protected function open()
    {
        echo '<<';
    }

    protected function show()
    {
        echo $this->char;
    }

    protected function close()
    {
        echo '>>' . PHP_EOL;
    }
}
