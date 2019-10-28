<?php

namespace App\Car;

use App\Car\Interfaces\ElectricEngineInterface;

/**
 * Class ElectricCar
 * @package App\Car
 */
class ElectricCar implements ElectricEngineInterface
{
    public function electricOutput($ratio)
    {
        echo('ガソリン：'.$ratio.' ％');
    }

    public function running()
    {
        $this->electricOutput(100);
    }
}