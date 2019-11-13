<?php

namespace App\Brige\Interfaces;

/**
 * Interface FileDataManageInterface
 */
interface FileDataManageInterface
{
    public function read();
    public function display();
    public function getTotalCount();
    public function getPointer();
}