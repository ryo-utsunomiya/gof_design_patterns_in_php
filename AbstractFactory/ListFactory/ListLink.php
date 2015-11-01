<?php

namespace ListFactory;

use AbstractFactoryFramework\Link;

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