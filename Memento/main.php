<?php namespace Memento;

use function Util\println;

require_once __DIR__ . '/../autoload.php';

$gamer = new Gamer(100);
$memento = $gamer->createMemento();

for ($i = 0; $i < 100; $i++) {
    println('==== ' . $i);
    println('Current:' . $gamer);

    $gamer->bet();

    println('Now I have ' . $gamer->getMoney());

    if ($gamer->getMoney() > $memento->getMoney()) {
        println('I would save current state.');
        $memento = $gamer->createMemento();
    } else if ($gamer->getMoney() < $memento->getMoney() / 2) {
        println('I lost more than half of my money. Restoring...');
        $gamer->restoreMemento($memento);
    }

    sleep(1);
    println('');
}