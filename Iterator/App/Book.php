<?php
/**
 * Created by PhpStorm.
 * User: power
 * Date: 2019/10/30
 * Time: 20:26
 */

namespace App;


/**
 * Class Book
 * @package App
 */
class Book
{
    /**
     * @var string
     */
    private $name;

    /**
     * Book constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() :string
    {
        return $this->name;
    }
}