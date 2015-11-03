<?php

namespace AbstractFactory\ListFactory;

use AbstractFactory\Framework\Factory;

class ListFactory extends Factory
{
    /**
     * @param string $caption
     * @param string $url
     * @return ListLink
     */
    public function createLink($caption, $url)
    {
        return new ListLink($caption, $url);
    }

    /**
     * @param string $caption
     * @return ListTray
     */
    public function createTray($caption)
    {
        return new ListTray($caption);
    }

    /**
     * @param string $title
     * @param string $author
     * @return ListPage
     */
    public function createPage($title, $author)
    {
        return new ListPage($title, $author);
    }
}