<?php

namespace App\Bridge;

use Exception;

class ReadFactory
{
    const READ_TYPE_JSON = 1;
    const READ_TYPE_CSV = 2;

    /**
     * @param $read_type
     * @param $path
     * @return OutputAuto
     */
    public static function createOutputAuto($read_type, $path): OutputAuto
    {
        try {
            switch ($read_type) {
                case self::READ_TYPE_JSON:
                    return new OutputAuto(new JsonFileDataManage($path));

                case self::READ_TYPE_CSV:
                    return new OutputAuto(new CsvFileDataManage($path));

                default:
                    throw new Exception('read type not found');
            }

        } catch (Exception $e) {
            echo($e->getMessage());
            exit();
        }
    }
}