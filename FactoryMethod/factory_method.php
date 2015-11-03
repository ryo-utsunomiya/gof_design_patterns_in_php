<?php

require_once __DIR__ . '/../autoload.php';

$factory = new \FactoryMethod\IDCard\IDCardFactory();
$card1 = $factory->create('Stan');
$card2 = $factory->create('Kyle');
$card3 = $factory->create('Cartman');
$card4 = $factory->create('Kenny');
$card1->useThis();
$card2->useThis();
$card3->useThis();
$card4->useThis();