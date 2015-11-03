<?php

namespace AbstractFactory\Framework;

require_once __DIR__ . '/../autoload.php';

if (!isset($argv[1])) {
    printf("Usage: php abstract_factory.php \\\AbstractFactory\\\ListFactory\\\ListFactory\n");
    exit;
}

try {
    $factory = Factory::getFactory($argv[1]);
} catch (\RuntimeException $e) {
    echo $e->getMessage() . PHP_EOL;
    exit;
}

$traySearchEngine = $factory->createTray('Search Engine');
$traySearchEngine->add($factory->createLink('Google', 'https://www.google.com/'));
$traySearchEngine->add($factory->createLink('DuckDuckGo', 'https://duckduckgo.com/'));

$page = $factory->createPage('LinkPage', 'ryo');
$page->add($traySearchEngine);
$page->output();