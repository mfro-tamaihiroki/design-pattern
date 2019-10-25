<?php

namespace App\Bridge;

use App\Brige\Interfaces\OutputInterface;
use App\Brige\Interfaces\ReadFileInterface;

class TableOutput implements OutputInterface
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

        echo('<table>');
        while(!empty($row)) {
            echo('<tr><td>'.$row['id'] . '</td><td>' . $row['fullName'].'</td></tr>');
            $row = $this->readFile->getRow();
        }
        echo('</table>');
    }
}