<?php

namespace App\Bridge;

use App\Brige\Interfaces\OutputInterface;
use App\Brige\Interfaces\ReadFileInterface;

class ListOutput implements OutputInterface
{
    private $readFile;

    /**
     * ListOutput constructor.
     * @param ReadFileInterface $readFile
     */
    public function __construct(ReadFileInterface $readFile)
    {
        $this->readFile = $readFile;
        $this->readFile->read();
    }

    /**
     * @return void
     */
    public function output()
    {
        $row = $this->readFile->getRow();

        echo('<ul>');
        while(!empty($row)) {
            echo('<li>'.$row['id'] . '/' . $row['fullName'].'</li>');
            $row = $this->readFile->getRow();
        }
        echo('</ul>');
    }
}