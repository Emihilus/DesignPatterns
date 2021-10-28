<?php

namespace App\Controller\Patterns\FactoryMethod\Classes;

class CarFactory
{
    public static function createCar($className, $modelName): Car
    {
        $car = new $className();

        switch(substr(strrchr($className, "\\"), 1))
        {
            case 'BMW':
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
                break;


            case 'Ford':

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
                break;
        }

        return $car;
    }

    public static function createBMW($className, $modelName): Car
    {
        $car = new $className();

        switch(substr(strrchr($className, "\\"), 1))
        {
            case 'BMW':
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
                break;


            case 'Ford':

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
                break;
        }

        return $car;
    }
}