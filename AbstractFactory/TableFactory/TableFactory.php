<?php

namespace AbstractFactory\TableFactory;

use AbstractFactory\Framework\Factory;

class TableFactory extends Factory
{
    /**
     * @param string $caption
     * @param string $url
     * @return TableLink
     */
    public function createLink($caption, $url)
    {
        return new TableLink($caption, $url);
    }

    /**
     * @param string $caption
     * @return TableTray
     */
    public function createTray($caption)
    {
        return new TableTray($caption);
    }

    /**
     * @param string $title
     * @param string $author
     * @return TablePage
     */
    public function createPage($title, $author)
    {
        return new TablePage($title, $author);
    }
}
