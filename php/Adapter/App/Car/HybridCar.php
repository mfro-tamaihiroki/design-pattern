<?php
namespace App\Car;

use App\Car\Interfaces\EngineInterface;
use App\Car\ElectricCar;
use App\Car\GasolineCar;

class HybridCar extends ElectricCar implements EngineInterface
{
    public function gasolineOutput(int $ratio)
    {
        echo('ガソリン：'.$ratio.' ％');
    }

    public function running()
    {
        $this->gasolineOutput(50);
        $this->electricOutput(50);
    }
}