<?php
namespace App\Human;

/**
 * Class Human
 * @package App\Human
 */
class Human
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $age;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $weight;

    /**
     * Human constructor.
     */
    public function __construct()
    {
        // ハッシュくん生成の儀
        $this->name = (md5(rand(0 , 100)));
        $this->age = rand(20, 100);
        $this->height = rand(130, 170);
        $this->weight = rand(60, 80);
    }

    public function echoMyStatus()
    {
        foreach (get_object_vars($this) as $k => $v) {
            echo($k.':'.$v.'<br>');
        }
        echo('<br>');
    }
}