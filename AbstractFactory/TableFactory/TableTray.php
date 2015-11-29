<?php

namespace AbstractFactory\TableFactory;

use AbstractFactory\Framework\Tray;
use AbstractFactory\Framework\Item;
use AbstractFactory\Framework as helper;

class TableTray extends Tray
{
    /**
     * @return string
     */
    public function makeHTML()
    {
        $html = '';
        $html .= '<td>'."\n";
        $html .= '<table width="100%" border="1">'."\n";
        $html .= '<tr>'."\n";
        $html .= '<td bgcolor="#ccc" align="center" colspan="' . count($this->tray) . '">';
        $html .= '<b>' . helper\h($this->caption) . '</b>';
        $html .= '</td>';
        $html .= '</tr>'."\n";
        $html .= '<tr>'."\n";

        /** @var Item $item */
        foreach ($this->tray as $item) {
            $html .= $item->makeHTML();
        }

        $html .= '</tr>'."\n";
        $html .= '</table>'."\n";
        $html .= '</td>';

        return $html;
    }
}
