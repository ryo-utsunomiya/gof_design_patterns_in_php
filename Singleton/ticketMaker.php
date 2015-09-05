<?php

namespace my;

require_once __DIR__ . '/../autoload.php';

$maker1 = TicketMaker::getInstance();
$maker2 = TicketMaker::getInstance();

printf("Next ticket: %d\n", $maker1->getNextTicketNumber());
printf("Next ticket: %d\n", $maker2->getNextTicketNumber());
printf("Next ticket: %d\n", $maker1->getNextTicketNumber());