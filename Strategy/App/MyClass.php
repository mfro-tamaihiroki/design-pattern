<?php
namespace App;

use App\Compare\Interfaces\HumanCompareInterface;
use App\Human\Human;

class MyClass
{
    /**
     * @var HumanCompareInterface
     */
    public $compare;

    /**
     * MyClass constructor.
     * @param HumanCompareInterface $humanCompare
     */
    public function __construct(HumanCompareInterface $humanCompare)
    {
        $this->compare = $humanCompare;
    }

    /**
     * @param Human $human1
     * @param Human $human2
     * @return bool
     */
    public function comparer(Human $human1, Human $human2)
    {
        return $this->compare->compare($human1, $human2);
    }
}