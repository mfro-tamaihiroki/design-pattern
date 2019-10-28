<?php
/**
 * Created by PhpStorm.
 * User: power
 * Date: 2019/10/28
 * Time: 20:22
 */

namespace App\Compare;

use App\Compare\Interfaces\HumanCompareInterface;
use App\Human;

/**
 * Class HumanCompareByAge
 * @package App\Compare
 */
class HumanCompareByWeight implements HumanCompareInterface
{
    /**
     * @param Human $human1
     * @param Human $human2
     * @return bool
     */
    public function compare(Human $human1, Human $human2)
    {
        return $human1->weight > $human2->weight ? true : false;
    }
}