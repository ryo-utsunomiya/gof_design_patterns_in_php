<?php

namespace my;

class BookShelfImplementsPhpIterator implements \Iterator
{
    /**
     * @var BookShelf
     */
    private $bookShelf;

    /**
     * @var int
     */
    private $index = 0;

    /**
     * @param BookShelf $bookShelf
     */
    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
    }

    /**
     * Return the current element
     *
     * @return mixed Can return any type.
     */
    public function current()
    {
        return $this->bookShelf->getBookAt($this->index);
    }

    /**
     * Move forward to next element
     *
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        $this->index++;
    }

    /**
     * Return the key of the current element
     *
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return $this->index;
    }

    /**
     * Checks if current position is valid
     *
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid()
    {
        return !is_null($this->bookShelf->getBookAt($this->index));
    }

    /**
     * Rewind the Iterator to the first element
     *
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        $this->index = 0;
    }
}
