<?php

namespace App\Bridge;

use App\Brige\Interfaces\FileDataManageInterface;

class Output
{
    /**
     * @var FileDataManageInterface
     */
    protected $data_manege;

    /**
     * Output constructor.
     * @param FileDataManageInterface $dataManege
     */
    public function __construct(FileDataManageInterface $dataManege)
    {
        $this->data_manege = $dataManege;
    }

    public function read()
    {
        $this->data_manege->read();
    }

    public function display()
    {
        $this->data_manege->display();
    }
}