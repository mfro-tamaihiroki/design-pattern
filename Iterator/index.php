<?php

// 自作オートローダー
spl_autoload_register(function ($class) {
    $class = str_replace ( "\\", '/' , $class);
    require_once($class . '.php');
});

use App\Book;
use App\ConcreteIterator;
use App\ConcreteAggregate;

$aggregate = new ConcreteAggregate();
$aggregate->appendBook(new Book('php入門'));
$aggregate->appendBook(new Book('js入門'));
$aggregate->appendBook(new Book('python入門'));
$aggregate->appendBook(new Book('css入門'));
$aggregate->appendBook(new Book('Html入門'));

$Iterator = $aggregate->getIterator();

while($Iterator->hasNext()) {
    $book = $Iterator->next();
    echo($book->getName());
}



