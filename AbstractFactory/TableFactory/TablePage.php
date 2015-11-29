<?php

namespace AbstractFactory\TableFactory;

use AbstractFactory\Framework\Page;
use AbstractFactory\Framework\Item;
use AbstractFactory\Framework as helper;

class TablePage extends Page
{
    public function makeHTML()
    {
        $html = '';

        $html .= '<html><head><title>' . helper\h($this->title) . '</title></head>' . "\n";
        $html .= '<body>' . "\n";
        $html .= '<h1>' . helper\h($this->title) . '</h1>' . "\n";
        $html .= '<table width="80%" border="3">'."\n";

        /** @var Item $item */
        foreach ($this->content as $item) {
            $html .= '<tr>' . $item->makeHTML() . '</tr>' . "\n";
        }

        $html .= '<hr><address>' . helper\h($this->author) . '</address>';
        $html .= '</body></html>';

        return $html;
    }
}
