<?php

namespace App\Car;

use App\Car\Interfaces\EngineInterface;

class GasolineCar implements EngineInterface
{
    /**
     * @param $ratio
     */
    public function gasolineOutput(int $ratio)
    {
        echo('ガソリン：'.$ratio.' ％');
    }

    public function running()
    {
        $this->gasolineOutput(100);
    }
}