<?php
/**
 * Created by PhpStorm.
 * User: power
 * Date: 2019/10/28
 * Time: 20:22
 */

namespace App\Compare;

use App\Compare\Interfaces\HumanCompareInterface;
use App\Human\Human\Human;

/**
 * Class HumanCompareByAge
 * @package App\Compare
 */
class HumanCompareByAge implements HumanCompareInterface
{
    /**
     * @param Human $human1
     * @param Human $human2
     * @return bool
     */
    public function compare(Human $human1, Human $human2)
    {
        return $human1->age > $human2->age ? true : false;
    }
}