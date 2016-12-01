<?php namespace ChainOfResponsibility;

require_once __DIR__ . '/../autoload.php';

$alice = new NoSupport('alice');
$alice
    ->setNext(new LimitSupport('bob', 100))
    ->setNext(new SpecialSupport('charlie', 429))
    ->setNext(new OddSupport('diana'));

for ($i = 0; $i < 500; $i++) {
    $alice->support(new Trouble($i));
}
