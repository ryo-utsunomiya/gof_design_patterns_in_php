<?php

namespace AbstractFactory\TableFactory;

use AbstractFactory\Framework\Page;
use AbstractFactory\Framework\Item;

class TablePage extends Page
{
    /**
     * @return string
     */
    public function makeHTML()
    {
        /**
         * @param string $str
         * @return string
         */
        $h = function ($str) {
            return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
        };

        $html = '';

        $html .= '<html><head><title>' . $h($this->title) . '</title></head>' . "\n";
        $html .= '<body>' . "\n";
        $html .= '<h1>' . $h($this->title) . '</h1>' . "\n";
        $html .= '<table width="80%" border="3">' . "\n";

        /** @var Item $item */
        foreach ($this->content as $item) {
            $html .= '<tr>' . $h($item->makeHTML()) . '</tr>' . "\n";
        }

        $html .= '<hr><address>' . $h($this->author) . '</address>';
        $html .= '</body></html>';

        return $html;
    }
}
