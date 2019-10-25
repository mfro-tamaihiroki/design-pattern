<?php

namespace App\Brige\Interfaces;

/**
 * Interface ReadFileInterface
 * @package App\Brige\Interfaces
 */
interface ReadFileInterface
{
    /**
     * @return void
     */
    public function read();

    /**
     * @return array
     */
    public function getRow();

    /**
     * @return int|false
     */
    public function getTotalCount();

    /**
     * @return int|false
     */
    public function getPointer();
}
