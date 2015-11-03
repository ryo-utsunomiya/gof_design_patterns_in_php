<?php

namespace Prototype;

require_once __DIR__ . '/../autoload.php';

$manager = new Framework\Manager();
$manager->register('strong message', new my\UnderlinePen('~'));
$manager->register('warning box', new my\MessageBox('*'));
$manager->register('slash box', new my\MessageBox('/'));

$manager->create('strong message')->display('Hello, World');
$manager->create('warning box')->display('Hello, world.');
$manager->create('slash box')->display('Hello, world.');