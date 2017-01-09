<?php namespace Observer;

require_once __DIR__ . '/../autoload.php';

$randomNumberGenerator = new RandomNumberGenerator();
$randomNumberGenerator->addObserver(new DigitObserver());
$randomNumberGenerator->addObserver(new GraphObserver());
$randomNumberGenerator->execute();

$incrementalNumberGenerator = new IncrementalNumberGenerator(0, 100, 5);
$incrementalNumberGenerator->addObserver(new DigitObserver());
$incrementalNumberGenerator->addObserver(new GraphObserver());
$incrementalNumberGenerator->execute();
