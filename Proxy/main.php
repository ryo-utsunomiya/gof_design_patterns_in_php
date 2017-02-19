<?php

namespace Proxy;

use function Util\println;

require_once __DIR__ . '/../vendor/autoload.php';

$p = new PrinterProxy("Alice");
println("Current name is {$p->getPrinterName()}.");
$p->doPrint('Bob');
println("Current name is {$p->getPrinterName()}.");
$p->doPrint('Hello, world');
