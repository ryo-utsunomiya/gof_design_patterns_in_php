<?php

namespace Decorator;

class StringDisplay extends Display
{
    private $string;

    /**
     * StringDisplay constructor.
     * @param string $string
     */
    public function __construct($string)
    {
        if (!is_string($string)) {
            throw new \InvalidArgumentException();
        }
        
        $this->string = $string;
    }

    /**
     * @return int
     */
    public function getColumns()
    {
        return strlen($this->string);
    }

    /**
     * @return int
     */
    public function getRows()
    {
        return 1;
    }

    /**
     * @param int $row
     * @return string
     */
    public function getRowText($row)
    {
        if (0 === $row) {
            return $this->string;
        } else {
            return '';
        }
    }
}