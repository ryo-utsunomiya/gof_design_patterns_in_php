<?php

namespace Facade\PageMaker;

class PageMaker
{
    private function __construct() { }

    public static function makeWelcomePage($mailAddress, $filename)
    {
        $mailProp = Database::getProperties("maildata");
        $username = $mailProp[$mailAddress];
        $writer = new HtmlWriter($filename);
        $writer->title("Welcome to " . $username . "'s page!");
        $writer->paragraph("Welcome to " . $username . "'s page.");
        $writer->paragraph("I want to your email.");
        $writer->mailto($mailAddress, $username);
        $writer->close();
        $writer->write();
        echo $filename . " is created for " . $mailAddress . " (" . $username . ")\n";
    }
}
