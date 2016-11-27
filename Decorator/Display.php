<?php

namespace Decorator;

abstract class Display
{
    /**
     * @return int
     */
    abstract public function getColumns();

    /**
     * @return int
     */
    abstract public function getRows();

    /**
     * @param int $row
     * @return string
     */
    abstract public function getRowText($row);

    public function show()
    {
        for ($i = 0; $i < $this->getRows(); $i++) {
            echo $this->getRowText($i) . PHP_EOL;
        }
    }
}