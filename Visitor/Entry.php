<?php

namespace Visitor;

abstract class Entry implements ElementInterface
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
     * @param Entry $entry
     */
    public function add(Entry $entry)
    {
        throw new FileTreatmentException();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s (%d)', $this->getName(), $this->getSize());
    }
}