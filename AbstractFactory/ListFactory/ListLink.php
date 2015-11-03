<?php

namespace AbstractFactory\ListFactory;

use AbstractFactory\Framework\Link;

class ListLink extends Link
{
    /**
     * @return string
     */
    public function makeHTML()
    {
        return sprintf('<li><a href="%s">%s</a></li>'."\n", $this->url, $this->caption);
    }
}