<?php

namespace Composite;

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

    protected function _printList($prefix)
    {
        printf("%s/%s\n", $prefix, $this);
        
        foreach ($this->directory as $entry) {
            $entry->_printList($prefix . '/' . $this->name);
        }
        
        
    }
}