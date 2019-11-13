<?php

namespace App\Compare\Interfaces;
use App\Human\Human;

/**
 * Interface HumanCompareInterface
 * @package App\Compare\Interfaces\HumanCompareInterface
 */
interface HumanCompareInterface
{
    /**
     *
     * @param Human $human1
     * @param Human $human2
     * @return bool
     */
    public function compare(Human $human1, Human $human2);
}