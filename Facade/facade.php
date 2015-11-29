<?php

namespace AbstractFactory\Framework;

use Facade\PageMaker\PageMaker;

require_once __DIR__ . '/../autoload.php';

PageMaker::makeWelcomePage("hyuki@hyuki.com", "welcome.html");