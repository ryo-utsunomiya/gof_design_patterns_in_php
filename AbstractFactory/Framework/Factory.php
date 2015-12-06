<?php

namespace AbstractFactory\Framework;

abstract class Factory
{
    /**
     * @param string $className
     * @return Factory
     * @throws \RuntimeException
     */
    public static function getFactory($className)
    {
        if (class_exists($className)) {
            $factory = new $className();

            if ($factory instanceof Factory) {
                return $factory;
            } else {
                throw new \RuntimeException(sprintf('Class %s is not a Factory.', $className));
            }
        } else {
            throw new \RuntimeException(sprintf('Class %s Not Found', $className));
        }
    }

    /**
     * @param string $caption
     * @param string $url
     * @return Link
     */
    public abstract function createLink($caption, $url);

    /**
     * @param string $caption
     * @return Tray
     */
    public abstract function createTray($caption);

    /**
     * @param string $title
     * @param string $author
     * @return Page
     */
    public abstract function createPage($title, $author);
}