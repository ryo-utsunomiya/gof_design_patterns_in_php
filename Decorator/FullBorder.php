<?php

namespace Decorator;

class FullBorder extends Border
{
    /**
     * SideBorder constructor.
     * @param Display $display
     */
    public function __construct(Display $display)
    {
        parent::__construct($display);
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
        return 1 + $this->display->getRows() + 1;
    }

    /**
     * @param int $row
     * @return string
     */
    public function getRowText($row)
    {
        if (0 === $row) {
            return '+' . str_repeat('-', $this->display->getColumns()) . '+';
        } elseif ($row === $this->display->getRows() + 1) {
            return '+' . str_repeat('-', $this->display->getColumns()) . '+';
        } else {
            return '|' . $this->display->getRowText($row - 1) . '|';
        }
    }
}