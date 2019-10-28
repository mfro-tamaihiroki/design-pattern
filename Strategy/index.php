<?php

// ぼくの考えた最強のオートローダー
spl_autoload_register(function ($class) {
    $class = str_replace ( "\\", '/' , $class);
    require_once($class . '.php');
});


use App\MyClass;
use App\Human\Human\Human;
use App\Compare\HumanCompareByWeight;


$c = new MyClass(new HumanCompareByWeight);

echo($c->comparer(new Human() , new Human()));