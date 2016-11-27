<?php

require_once __DIR__ . '/../autoload.php';

use Strategy\Player;
use Strategy\WinningStrategy;
use Strategy\ProbStrategy;

$player1 = new Player("Taro", new WinningStrategy());
$player2 = new Player("Hana", new ProbStrategy());

for ($i = 0; $i < 10000; $i++) {
    $nextHand1 = $player1->nextHand();
    $nextHand2 = $player2->nextHand();

    if ($nextHand1->isStrongerThan($nextHand2)) {
        printf("Winner: %s\n", $player1);
        $player1->win();
        $player2->lose();
    } elseif ($nextHand2->isStrongerThan($nextHand1)) {
        printf("Winner: %s\n", $player2);
        $player1->lose();
        $player2->win();
    } else {
        printf("Even\n");
        $player1->even();
        $player2->even();
    }
}

echo 'Total result:' . PHP_EOL;
echo $player1 . PHP_EOL;
echo $player2 . PHP_EOL;