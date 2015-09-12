<?php

namespace my;

class HtmlBuilder implements Builder
{
    /**
     * @var string
     */
    private $string = '';

    /**
     * @var string
     */
    private $filename = '';

    /**
     * @param string $title
     */
    public function makeTitle($title)
    {
        $this->filename = $title . '.html';
        $this->string .= '<html><head><title>' . $title . '</title></head><body>';
        $this->string .= '<h1>' . $title . '</h1>';
    }

    /**
     * @param string $str
     */
    public function makeString($str)
    {
        $this->string .= '<p>' . $str . '</p>';
    }

    /**
     * @param array $items
     */
    public function makeItems(array $items)
    {
        $this->string .= '<ul>';

        foreach ($items as $item) {
            $this->string .= '<li>' . $item . '</li>';
        }

        $this->string .= '</ul>';
    }

    public function close()
    {
        $this->string .= '</body></html>';
        file_put_contents($this->filename, $this->string);
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->filename;
    }
}
