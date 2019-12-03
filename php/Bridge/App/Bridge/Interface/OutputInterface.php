<?php

namespace App\Brige\Interfaces;

/**
 * Interface WriteFileInterface
 * @package App\Brige\Interfaces
 */
interface OutputInterface
{
    public function __construct(ReadFileInterface $input);

    /**
     * @return void
     */
    public function output();

}
