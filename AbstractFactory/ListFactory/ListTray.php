<?php

namespace AbstractFactory\ListFactory;

use AbstractFactory\Framework\Tray;

class ListTray extends Tray
{
    /**
     * @return string
     */
    public function makeHTML()
    {
        $html = '';
        $html .= "<li>\n";
        $html .= $this->caption . "\n";
        $html .= "<ul>\n";

        foreach ($this->tray as $item) {
            $html .= $item->makeHTML();
        }

        $html .= "</ul>\n";
        $html .= "</li>\n";

        return $html;
    }
}