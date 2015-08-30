<?php

namespace my;

require_once __DIR__ . '/../autoload.php';

$bookShelf = new BookShelf();
$bookShelf->appendBook(new Book('Around the World in 80 Days'));
$bookShelf->appendBook(new Book('Bible'));
$bookShelf->appendBook(new Book('Cinderella'));
$bookShelf->appendBook(new Book('Daddy-Long-Legs'));
$it = $bookShelf->iterator();

while ($it->hasNext()) {
    $book = $it->next();
    echo $book->getName(), PHP_EOL;
}