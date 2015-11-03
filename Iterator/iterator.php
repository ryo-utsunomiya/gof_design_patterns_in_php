<?php

namespace Iterator\my;

require_once __DIR__ . '/../autoload.php';

$bookShelf1 = new BookShelf();
$bookShelf1->appendBook(new Book('Around the World in 80 Days'));
$bookShelf1->appendBook(new Book('Bible'));
$bookShelf1->appendBook(new Book('Cinderella'));
$bookShelf1->appendBook(new Book('Daddy-Long-Legs'));
$it = $bookShelf1->iterator();

while ($it->hasNext()) {
    $book = $it->next();
    echo $book->getName(), PHP_EOL;
}

$bookShelf2 = new BookShelfImplementsIteratorAggregate();
$bookShelf2->appendBook(new Book('Around the World in 80 Days'));
$bookShelf2->appendBook(new Book('Bible'));
$bookShelf2->appendBook(new Book('Cinderella'));
$bookShelf2->appendBook(new Book('Daddy-Long-Legs'));

/** @var Book $book */
foreach ($bookShelf2 as $book) {
    echo $book->getName(), PHP_EOL;
}

$bookShelf3 = new BookShelfWithPhpIterator();
$bookShelf3->appendBook(new Book('Around the World in 80 Days'));
$bookShelf3->appendBook(new Book('Bible'));
$bookShelf3->appendBook(new Book('Cinderella'));
$bookShelf3->appendBook(new Book('Daddy-Long-Legs'));

/** @var Book $book */
foreach ($bookShelf3->iterator() as $book) {
    echo $book->getName(), PHP_EOL;
}