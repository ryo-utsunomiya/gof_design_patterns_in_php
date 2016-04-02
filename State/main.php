<?php

namespace State\my;

require_once __DIR__ . '/../autoload.php';

$hour = 0;
$safe = new Safe($hour);

while (true) {
    if ($hour === 24) {
        $hour = 0;
    } else {
        $hour++;
    }

    $safe->setClock($hour);

    sleep(1);
}