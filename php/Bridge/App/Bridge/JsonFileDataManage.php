<?php

namespace App\Bridge;

use App\Brige\Interfaces\FileDataManageInterface;
use Exception;

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

    /**
     * @return bool
     */
    public function read(): bool
    {
        try {
            if (!file_exists($this->json_path)) {
                throw new Exception('file not found');
            }
            $this->data = json_decode(file_get_contents($this->json_path), true)['dummi_data'];
            $this->data_total = count($this->data);

        } catch (Exception $e) {
            echo($e->getMessage());
            return false;
        }
        return true;
    }

    public function display(): bool
    {
        try {
            if (empty($this->data[$this->pointer])) {
                throw new Exception('key not found');
            }
            echo($this->data[$this->pointer]['id'] . '/' . $this->data[$this->pointer]['fullName'] . '<br>');
            $this->pointer++;
            return true;

        } catch (Exception $e) {
            echo($e->getMessage());
            return false;
        }
    }

    public function getTotalCount(): int
    {
        return $this->data_total;
    }

    public function getPointer(): int
    {
        return $this->pointer;
    }
}