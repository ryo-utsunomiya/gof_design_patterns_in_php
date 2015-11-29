<?php

namespace Facade\PageMaker;

class Database
{
    private function __construct() { }

    public static function getProperties($dbname)
    {
        $filename = $dbname . ".txt";
        // todo
        $properties = "";
        $properties = file_get_contents($filename);
        return $properties;
    }
}
