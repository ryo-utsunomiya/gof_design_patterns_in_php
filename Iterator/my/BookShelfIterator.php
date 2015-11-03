<?php

namespace Iterator\my;

class BookShelfIterator implements Iterator
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
     * @return bool
     */
    public function hasNext()
    {
        return $this->index < $this->bookShelf->getLength();
    }

    /**
     * @return Book
     */
    public function next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;

        return $book;
    }
}
