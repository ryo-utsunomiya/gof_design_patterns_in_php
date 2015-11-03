<?php

namespace Builder\my;

interface Builder
{
    /**
     * @param string $title
     */
    public function makeTitle($title);

    /**
     * @param string $str
     */
    public function makeString($str);

    /**
     * @param array $items
     */
    public function makeItems(array $items);

    public function close();
}
