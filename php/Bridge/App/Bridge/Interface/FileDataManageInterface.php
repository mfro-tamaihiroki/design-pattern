<?php

namespace App\Brige\Interfaces;

/**
 * Interface FileDataManageInterface
 */
interface FileDataManageInterface
{
    /**
     * @return bool
     */
    public function read(): bool;

    /**
     * @return bool
     */
    public function display(): bool;

    /**
     * @return int
     */
    public function getTotalCount(): int;

    /**
     * @return int
     */
    public function getPointer(): int;
}