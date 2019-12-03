<?php

namespace App\Car\Interfaces;

interface EngineInterface
{
    public function gasolineOutput(int $ratio);
}