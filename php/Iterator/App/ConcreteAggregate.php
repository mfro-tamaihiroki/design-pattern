<?php

namespace App;

use App\Interfaces\Aggregate;
use App\Interfaces\Iterator;

/**
 * Class ConcreteAggregate
 * @package App
 */
class ConcreteAggregate implements Aggregate
{
    /**
     * @var array
     */
    public $book = [];

    /**
     * @param Book $book
     */
    public function appendBook(Book $book)
    {
        $this->book[] = $book;
    }

    /**
     * @return Iterator
     */
    public function getIterator(): Iterator
    {
        return new ConcreteIterator($this);
    }
}