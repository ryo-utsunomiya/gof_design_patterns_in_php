<?php

namespace my;

require_once __DIR__ . '/../autoload.php';

/** @var array $argv */
if (1 === count($argv)) {
    usage();
    exit;
} elseif ($argv[1] === 'plain') {
    $textBuilder = new TextBuilder();
    (new Director($textBuilder))->construct();
    echo $textBuilder->getResult(), PHP_EOL;
} elseif ($argv[1] === 'html') {
    $htmlBuilder = new HtmlBuilder();
    (new Director($htmlBuilder))->construct();
    echo $htmlBuilder->getResult(), PHP_EOL;
} else {
    usage();
}

function usage() {
    echo 'Usage: php builder.php plain -- Create plain text document', PHP_EOL;
    echo 'Usage: php builder.php html -- Create html document', PHP_EOL;
}