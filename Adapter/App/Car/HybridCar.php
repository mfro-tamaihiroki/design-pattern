<?php
namespace App\Car;

use App\Car\Interfaces\EngineInterface;
use App\Car\GasolineCar;

class HybridCar extends GasolineCar implements EngineInterface
{
    public function gasolineOutput($ratio)
    {
        echo('ガソリン：'.$ratio.' ％');
    }

    public function running()
    {
        $this->gasolineOutput(50);
        $this->gasolineOutput(50);
    }
}