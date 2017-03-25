<?php namespace Mediator;

require_once __DIR__ . '/../autoload.php';

$bob = new Colleague('Bob');
$sue = new Colleague('Sue');
$chris = new Colleague('Chris');
$donna = new Colleague('Donna');

$mediator1 = (new ColleagueMediator())
    ->register($bob)
    ->register($sue)
    ->register($chris);

$bob->sendMessage($mediator1, 'Hi folks!');

$mediator2 = (new ColleagueMediator())
    ->register($sue)
    ->register($donna);

$sue->sendMessage($mediator2, 'A more private message.');