<?php

namespace App\Bridge;

use App\Brige\Interfaces\ReadFileInterface;
use Exception;

/**
 * Class JsonReadFile
 * @package App\Bridge
 */
class JsonReadFile implements ReadFileInterface
{
    /**
     * @var string
     */
    private $json_path;

    /**
     * @array
     */
    private $data;

    /**
     * @var int
     */
    private $totalCount;

    /**
     * @var int
     */
    private $pointer;

    /**
     * JsonReadFile constructor.
     * @param $json_path
     */
    public function __construct(string $json_path)
    {
        $this->json_path = $json_path;
    }

    /**
     * @return void
     */
    public function read()
    {
        try {
            if (!file_exists($this->json_path)) {
                throw new Exception('file not found');
            }
            $this->data = json_decode(file_get_contents($this->json_path), true)['dummi_data'];
            $this->totalCount = count($this->data);
            $this->pointer = 0;

        } catch (Exception $e) {
            echo($e->getMessage());
        }
    }

    /**
     * @return array
     */
    public function getRow(): array
    {
        try {
            if (empty($this->data[$this->pointer])) {
                throw new Exception('key not found');
            }
            $r = $this->data[$this->pointer];
            $this->pointer++;
            return $r;

        } catch (Exception $e) {
            return [];
        }
    }

    /**
     * @return int|false
     */
    public function getTotalCount(): int
    {
        try {
            if (empty($this->totalCount)) {
                throw new Exception('not read file');
            }
            return $this->totalCount;

        } catch (Exception $e) {
            echo($e->getMessage());
            return false;
        }
    }

    /**
     * @return int|false
     */
    public function getPointer(): int
    {
        try {
            if (empty($this->pointer)) {
                throw new Exception('not read file');
            }
            return $this->pointer;

        } catch (Exception $e) {
            echo($e->getMessage());
            return false;
        }
    }
}