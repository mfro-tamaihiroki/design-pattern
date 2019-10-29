<?php

// ぼくの考えた最強のオートローダー
spl_autoload_register(function ($class) {
    $class = str_replace ( "\\", '/' , $class);
    require_once($class . '.php');
});


use App\MyClass;
use App\Human\Human;
use App\Compare\HumanCompareByWeight;
use App\Compare\HumanCompareByHeight;
use App\Compare\HumanCompareByAge;

$c = new MyClass(new HumanCompareByHeight());

$name_a = new Human();
$name_a->echoMyStatus();

$name_b = new Human();
$name_b->echoMyStatus();


echo('WINNER:');
echo($c->comparer($name_a , $name_b) ? $name_a->name : $name_b->name);
