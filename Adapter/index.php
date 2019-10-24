<?php

spl_autoload_register(function ($class) {
    require_once('App/Car/' . $class . '.php');
});

use App\Car\HybridCar;

$car = new HybridCar();
$car->running();