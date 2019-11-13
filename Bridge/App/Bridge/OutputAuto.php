<?php

namespace App\Bridge;

use App\Bridge\Output;
use App\Brige\Interfaces\FileDataManageInterface;

class OutputAuto extends Output
{
    public function __construct(FileDataManageInterface $dataManege)
    {
        parent::__construct($dataManege);
    }

    public function autoDisplay()
    {
        while($this->data_manege->getPointer() !== $this->data_manege->getTotalCount()) {
            $this->display();
        }
    }
}