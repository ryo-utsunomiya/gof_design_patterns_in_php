<?php

namespace Singleton\my;

require_once __DIR__ . '/../autoload.php';

echo 'Start.', PHP_EOL;
$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();

printf("obj1 is %s.\n", get_class($obj1));
printf("obj2 is %s.\n", get_class($obj2));

if ($obj1 === $obj2) {
    echo '$obj1 and $obj2 is same instance.', PHP_EOL;
} else {
    echo '$obj1 and $obj2 is different instance.', PHP_EOL;
}

echo 'End.', PHP_EOL;