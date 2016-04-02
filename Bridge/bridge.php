<?php

namespace Bridge;

require_once __DIR__ . '/../autoload.php';

$d1 = new Display(new StringDisplayImpl('Hello, Japan'));
$d2 = new CountDisplay(new StringDisplayImpl('Hello, World'));

$d1->display();
$d2->display();
$d2->multiDisplay(3);
