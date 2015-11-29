<?php

namespace Facade\PageMaker;

class HtmlWriter
{
    private $htmlFileName;

    private $html = "";

    /**
     * HtmlWriter constructor.
     *
     * @param string $htmlFileName
     */
    public function __construct($htmlFileName)
    {
        $this->htmlFileName = $htmlFileName;
    }

    /**
     * @param string $title
     */
    public function title($title)
    {
        $this->html .= "<html><head><title>" . self::h($title) . "</title></head>";
        $this->html .= "<body>\n";
        $this->html .= "<h1>" . self::h($title) . "</h1>\n";
    }

    /**
     * @param string $msg
     */
    public function paragraph($msg)
    {
        $this->html .= "<p>" . self::h($msg) . "</p>\n";
    }

    /**
     * @param string $href
     * @param string $caption
     */
    public function link($href, $caption)
    {
        $this->html .= '<a href="' . self::h($href) . '">' . self::h($caption) . "</a>\n";
    }

    /**
     * @param string $mailAddress
     * @param string $username
     */
    public function mailto($mailAddress, $username)
    {
        $this->link("mailto:" . $mailAddress, $username);
    }

    public function close()
    {
        $this->html .= "</body></html>\n";
    }

    public function write()
    {
        file_put_contents($this->htmlFileName, $this->html);
    }

    /**
     * @param $str
     * @return string
     */
    public static function h($str)
    {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
}
