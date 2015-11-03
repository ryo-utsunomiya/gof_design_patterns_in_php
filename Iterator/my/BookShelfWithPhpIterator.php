<?php

namespace Iterator\my;

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
