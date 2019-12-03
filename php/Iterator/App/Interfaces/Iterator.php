<?php
/**
 * Created by PhpStorm.
 * User: power
 * Date: 2019/10/30
 * Time: 19:39
 */

namespace App\Interfaces;

use App\Book;
use App\ConcreteAggregate;

/**
 * Interface Iterator
 * @package App\Interfaces
 */
interface Iterator
{
    public function __construct(ConcreteAggregate $aggregate);

    public function hasNext();

    public function next() :Book;
}