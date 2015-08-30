<?php

namespace my;

interface Iterator
{
    /**
     * @return bool
     */
    public function hasNext();

    /**
     * @return mixed
     */
    public function next();
}
