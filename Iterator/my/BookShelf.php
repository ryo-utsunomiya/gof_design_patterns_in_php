<?php

namespace Iterator\my;

class BookShelf implements Aggregate
{
    /**
     * @var Book[]
     */
    private $books = [];

    /**
     * @var int
     */
    private $last = 0;

    /**
     * @param $index
     * @return Book|null
     */
    public function getBookAt($index)
    {
        if (isset($this->books[$index])) {
            return $this->books[$index];
        } else {
            return null;
        }
    }

    /**
     * @param Book $book
     */
    public function appendBook(Book $book)
    {
        $this->books[$this->last] = $book;
        $this->last++;
    }
    
    /**
     * @return int
     */
    public function getLength()
    {
        return $this->last;
    }

    /**
     * @return BookShelfIterator
     */
    public function iterator()
    {
        return new BookShelfIterator($this);
    }
}
