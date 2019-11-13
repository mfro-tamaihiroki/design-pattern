<?php

namespace App\Bridge;

use App\Brige\Interfaces\FileDataManageInterface;
use Countable;

class JsonFileDataManage implements FileDataManageInterface
{
    private $json_path;
    private $data;
    private $data_total = 0;
    private $pointer = 0;

    /**
     * FileDataManage constructor.
     * @param $json_path string
     */
    public function __construct($json_path)
    {
        $this->json_path = $json_path;
    }

    public function read()
    {
        $this->data = json_decode(file_get_contents($this->json_path))->dummi_data;
        $this->data_total = count((array)$this->data);
    }

    public function display()
    {
        echo($this->data[$this->pointer]->id .'/'.$this->data[$this->pointer]->fullName. '<br>');
        $this->pointer++;
    }

    public function getTotalCount()
    {
        return $this->data_total;
    }

    public function getPointer()
    {
        return $this->pointer;
    }
}