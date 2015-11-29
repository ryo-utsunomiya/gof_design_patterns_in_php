<?php

namespace AbstractFactory\ListFactory;

use AbstractFactory\Framework\Link;
use function AbstractFactory\Framework\h;

class ListLink extends Link
{
    /**
     * @return string
     */
    public function makeHTML()
    {
        return sprintf('<li><a href="%s">%s</a></li>'."\n", h($this->url), h($this->caption));
    }
}