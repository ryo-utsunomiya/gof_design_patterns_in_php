<?php

namespace Decorator;

class SideBorder extends Border
{
    /**
     * @var string
     */
    private $borderChar;

    /**
     * SideBorder constructor.
     * @param Display $display
     * @param string $char
     */
    public function __construct(Display $display, $char)
    {
        if (!is_string($char) || 1 !== strlen($char)) {
            throw new \InvalidArgumentException();
        }
        
        parent::__construct($display);
        $this->borderChar = $char;
    }

    /**
     * @return int
     */
    public function getColumns()
    {
        return 1 + $this->display->getColumns() + 1;
    }

    /**
     * @return int
     */
    public function getRows()
    {
        return $this->display->getRows();
    }

    /**
     * @param int $row
     * @return string
     */
    public function getRowText($row)
    {
        return $this->borderChar . $this->display->getRowText($row) . $this->borderChar;
    }
}