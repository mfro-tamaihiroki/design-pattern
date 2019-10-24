<?php

namespace App\Car;

use App\Car\Interfaces\EngineInterface;

class GasolineCar implements EngineInterface
{
    public function gasolineOutput($ratio)
    {
        echo('ガソリン：'.$ratio.' ％');
    }

    public function running()
    {
        $this->gasolineOutput(100);
    }
}