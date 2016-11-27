<?php

require_once __DIR__ . '/../autoload.php';

use Composite\Directory;
use Composite\File;

printf("Making root entries...\n");

$rootDir = new Directory('root');
$binDir = new Directory('bin');
$tmpDir = new Directory('tmp');
$usrDir = new Directory('usr');
$rootDir->add($binDir)->add($tmpDir)->add($usrDir);
$binDir->add(new File('vi', 10000));
$binDir->add(new File('latex', 20000));
$rootDir->printList();

printf("\n");
printf("Making user entries...\n");

$yuki = new Directory('yuki');
$hanako = new Directory('hanako');
$tomura = new Directory('tomura');
$usrDir->add($yuki)->add($hanako)->add($tomura);
$yuki->add(new File('diary.html', 100))->add(new File('Composite.java', 200));
$hanako->add(new File('memo.tex', 300));
$tomura->add(new File('game.doc', 400))->add(new File('junk.mail', 500));
$rootDir->printList();