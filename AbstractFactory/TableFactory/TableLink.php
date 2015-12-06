<?php

namespace AbstractFactory\TableFactory;

use AbstractFactory\Framework\Link;

class TableLink extends Link
{
    /**
     * @return string
     */
    public function makeHTML()
    {
        return sprintf('<a href="%s">%s</a>' . "\n", self::h($this->url), self::h($this->caption));
    }
}
