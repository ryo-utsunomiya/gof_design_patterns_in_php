<?php

namespace ListFactory;

use AbstractFactoryFramework\Page;

class ListPage extends Page
{
    /**
     * @return string
     */
    public function makeHTML()
    {
        $html = '';
        $html .= "<html><head><title>" . $this->title . "</title></head>\n";
        $html .= "<body>\n";
        $html .= "<h1>" . $this->title . "</h1>\n";
        $html .= "<ul>\n";

        foreach ($this->content as $item) {
            $html .= $item->makeHTML();
        }

        $html .= "</ul>\n";
        $html .= "<hr><address>" . $this->author . "</address>\n";
        $html .= "</body>\n";
        $html .= "</html>\n";

        return $html;
    }
}