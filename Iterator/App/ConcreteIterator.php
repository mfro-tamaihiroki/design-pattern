<?php

namespace App;

use App\Interfaces\Aggregate;
use App\Interfaces\Iterator;

/**
 * Class ConcreteIterator
 * @package App
 */
class ConcreteIterator implements Iterator
{
    /**
     * @var Aggregate
     */
    private $aggregate;

    /**
     * @var int
     */
    private $index = 0;


    /**
     * ConcreteIterator constructor.
     * @param ConcreteAggregate $aggregate
     */
    public function __construct(ConcreteAggregate $aggregate)
    {
        $this->aggregate = $aggregate;
    }

    /**
     * @return bool
     */
    public function hasNext()
    {
        return !empty($this->aggregate->book[$this->index + 1 ]) ? true : false ;
    }

    /**
     * @return Book
     */
    public function next():Book
    {
        $t = $this->aggregate->book[$this->index];
        $this->index++;
        return $t;
    }
}