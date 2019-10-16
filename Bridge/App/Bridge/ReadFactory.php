<?php

namespace App\Bridge;

class ReadFactory
{
    const READ_TYPE_JSON = 1;
    const READ_TYPE_CSV = 2;

    /**
     * @param $read_type
     * @param $path
     * @return Output | false
     */
    public static function getInstance($read_type, $path)
    {
        switch ($read_type){
            case self::READ_TYPE_JSON:
                return new OutputAuto(new JsonFileDataManage($path));

            case self::READ_TYPE_CSV:
                return new OutputAuto(new CsvFileDataManage($path));
        }
        return false;
    }
}