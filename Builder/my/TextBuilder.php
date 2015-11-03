<?php

namespace Builder\my;

class TextBuilder implements Builder
{
    /**
     * @var string
     */
    private $string = '';

    /**
     * @param string $title
     */
    public function makeTitle($title)
    {
        $this->drawLine();
        $this->string .= '# ' . $title . PHP_EOL;
        $this->string .= PHP_EOL;
    }

    /**
     * @param string $str
     */
    public function makeString($str)
    {
        $this->string .= '## ' . $str . PHP_EOL;
        $this->string .= PHP_EOL;
    }

    /**
     * @param array $items
     */
    public function makeItems(array $items)
    {
        foreach ($items as $item) {
            $this->string .= '* ' . $item . PHP_EOL;
        }

        $this->string .= PHP_EOL;
    }

    public function close()
    {
        $this->drawLine();
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->string;
    }

    private function drawLine()
    {
        $this->string .= str_repeat('=', 25) . PHP_EOL;
    }
}
