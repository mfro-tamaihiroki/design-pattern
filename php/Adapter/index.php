<?php

// ぼくの考えた最強のオートローダー
spl_autoload_register(function ($class) {
    $class = str_replace ( "\\", '/' , $class);
    require_once($class . '.php');
});

use App\Car\HybridCar;

$car = new HybridCar();
$car->running();