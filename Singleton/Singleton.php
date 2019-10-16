<?php

class Singleton
{
    private static $singleton;

    private $hash;

    private function __construct()
    {
        $this->hash = md5(mt_rand());
        echo "インスタンスを生成しました。" . PHP_EOL;
    }

    public static function getInstance()
    {
        if (!isset(self::$singleton)) {
            self::$singleton = new Singleton();
        }

        return self::$singleton;
    }

    public function getHash()
    {
        return $this->hash;
    }

}


