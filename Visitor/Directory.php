<?php

namespace Visitor;

class Directory extends Entry
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Entry[]
     */
    private $directory = [];

    /**
     * Directory constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        $size = 0;

        foreach ($this->directory as $entry) {
            $size += $entry->getSize();
        }

        return $size;
    }

    /**
     * @param Entry $entry
     * @return $this
     */
    public function add(Entry $entry)
    {
        $this->directory[] = $entry;
        return $this;
    }

    /**
     * @return Entry[]
     */
    public function iterator()
    {
        return $this->directory;
    }

    /**
     * @param Visitor $visitor
     */
    public function accept(Visitor $visitor)
    {
        $visitor->visit($this);
    }
}