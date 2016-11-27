<?php

namespace Composite;

abstract class Entry
{
    /**
     * @return string
     */
    abstract public function getName();

    /**
     * @return int
     */
    abstract public function getSize();

    /**
     * @param string $prefix
     * @return void
     */
    abstract protected function _printList($prefix);

    /**
     * @param Entry $entry
     */
    public function add(Entry $entry)
    {
        throw new FileTreatmentException();
    }

    public function printList()
    {
        $this->_printList('');
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s (%d)', $this->getName(), $this->getSize());
    }
}