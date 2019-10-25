<?php

namespace App\Brige\Interfaces;

/**
 * Interface WriteFileInterface
 * @package App\Brige\Interfaces
 */
interface WriteFileInterface
{
    public function __construct(ReadFileInterface $input);

    /**
     * @return void
     */
    public function output();

}
