<?php

namespace my;

class BookShelfWithPhpIterator extends BookShelf
{
    /**
     * @return BookShelfImplementsPhpIterator
     */
    public function iterator()
    {
        return new BookShelfImplementsPhpIterator($this);
    }
}
