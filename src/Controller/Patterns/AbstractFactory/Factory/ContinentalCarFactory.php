<?php

namespace App\Controller\Patterns\AbstractFactory\Factory;

use App\Controller\Patterns\AbstractFactory\Classes\BMW;
use App\Controller\Patterns\AbstractFactory\Classes\Ford;
use App\Controller\Patterns\AbstractFactory\Classes\Fuel;

class ContinentalCarFactory implements CarFactory
{
    public static function createBMW($modelName): BMW
    {
        $car = new BMW;
        switch($modelName)
        {
            case 'X5':
                $car->setModelName($modelName);
                $car->setProdYear(random_int(2000,2020));
                $car->setDisplacement(2500);
                $car->setFuelType(Fuel::GASOLINE);
                break;

            case 'E60':
                $car->setModelName($modelName);
                $car->setProdYear(random_int(2000,2020));
                $car->setDisplacement(1400);
                $car->setFuelType(Fuel::DIESEL);
                break;
        }
        $car->setPositionOfSterringWheel('RIGHT');
        return $car;
    }

    public static function createFord($modelName): Ford
    {
        $car = new Ford;
        switch($modelName)
        {
            case 'Focus':
                $car->setModelName($modelName);
                $car->setProdYear(random_int(2000,2020));
                $car->setDisplacement(1300);
                $car->setFuelType(Fuel::GASOLINE);
                break;

            case 'CMax':
                $car->setModelName($modelName);
                $car->setProdYear(random_int(2000,2020));
                $car->setDisplacement(1700);
                $car->setFuelType(Fuel::DIESEL);
                break;
        }

        $car->setPositionOfSterringWheel('RIGHT');
        return $car;
    }
}