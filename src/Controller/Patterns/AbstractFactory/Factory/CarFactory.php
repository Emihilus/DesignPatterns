<?php

namespace App\Controller\Patterns\AbstractFactory\Factory;

use App\Controller\Patterns\AbstractFactory\Classes\BMW;
use App\Controller\Patterns\AbstractFactory\Classes\Ford;

interface CarFactory
{
    public static function createFord($modelName): Ford;
    public static function createBMW($modelName): BMW;
}