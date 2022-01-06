<?php

declare(strict_types=1);

namespace App\Controller\Patterns\Adapter\Classes;

class ArrayPrinter
{

    public function setArray ($array)
    {
        $this->array = $array;
    }

    public function printSelf()
    {
        return $this->array->getAll();
    }

    public function printSpecificPosition(int $postion)
    {
        return $this->array->getSpecific($postion);
    }
}