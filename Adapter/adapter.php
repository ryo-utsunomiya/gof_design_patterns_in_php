<?php

namespace my;

require_once __DIR__ . '/../autoload.php';

$p = new PrintBanner('Hello');
$p->printWeak();
$p->printStrong();