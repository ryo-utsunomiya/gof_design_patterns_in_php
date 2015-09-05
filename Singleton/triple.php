<?php

namespace my;

require_once __DIR__ . '/../autoload.php';

$obj0 = Triple::getInstance(0);
$obj1 = Triple::getInstance(1);

if ($obj0 === $obj1) {
    echo '$obj1 and $obj2 is same instance.', PHP_EOL;
} else {
    echo '$obj1 and $obj2 is different instance.', PHP_EOL;
}