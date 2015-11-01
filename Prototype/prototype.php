<?php

namespace my;

use my\PrototypeFramework\Manager;

require_once __DIR__ . '/../autoload.php';

$manager = new Manager();
$manager->register('strong message', new UnderlinePen('~'));
$manager->register('warning box', new MessageBox('*'));
$manager->register('slash box', new MessageBox('/'));

$manager->create('strong message')->display('Hello, World');
$manager->create('warning box')->display('Hello, world.');
$manager->create('slash box')->display('Hello, world.');