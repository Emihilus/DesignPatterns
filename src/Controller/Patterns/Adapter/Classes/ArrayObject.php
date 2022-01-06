<?php

declare(strict_types=1);

namespace App\Controller\Patterns\Adapter\Classes;

class ArrayObject
{

    public function __construct($array)
    {
        $this->array = $array;
    }

    public function getAll()
    {
        return implode($this->array);
    }

    public function getSpecific($pos)
    {
        return $this->array[$pos];
    }

}