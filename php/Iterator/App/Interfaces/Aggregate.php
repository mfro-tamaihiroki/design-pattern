<?php
/**
 * Created by PhpStorm.
 * User: power
 * Date: 2019/10/30
 * Time: 19:42
 */

namespace App\Interfaces;

/**
 * Interface Aggregate
 * @package App\Interfaces
 */
interface Aggregate
{
    public function getIterator() :Iterator;
}
