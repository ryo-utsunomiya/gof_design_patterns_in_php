<?php

namespace AbstractFactory\Framework;

abstract class Page
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var Item[]
     */
    protected $content = [];

    /**
     * @param string $title
     * @param string $author
     */
    public function __construct($title, $author)
    {
        $this->title = (string)$title;
        $this->author = (string)$author;
    }

    /**
     * @param Item $item
     */
    public function add(Item $item)
    {
        array_push($this->content, $item);
    }

    public function output()
    {
        $filename = $this->title . ".html";

        if (file_put_contents($filename, $this->makeHTML())) {
            printf("Created: %s\n", $filename);
        } else {
            printf("Failed to create: %s\n", $filename);
        }
    }

    public abstract function makeHTML();
}
