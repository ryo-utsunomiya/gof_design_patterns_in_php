<?php

namespace AbstractFactory\TableFactory;

use AbstractFactory\Framework\Link;
use AbstractFactory\Framework as helper;

class TableLink extends Link
{
    /**
     * @return string
     */
    public function makeHTML()
    {
        return sprintf('<a href="%s">%s</a>' . "\n", helper\h($this->url), helper\h($this->caption));
    }
}
