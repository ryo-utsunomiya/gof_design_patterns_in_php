<?php namespace Decorator;

require_once __DIR__ . '/../autoload.php';

$b1 = new StringDisplay('Hello world');
$b2 = new SideBorder($b1, '#');
$b3 = new FullBorder($b2);
$b1->show();
$b2->show();
$b3->show();

(new SideBorder(new FullBorder(new FullBorder(new SideBorder(new FullBorder(new StringDisplay('hello')), '*'))), '/'))
    ->show();