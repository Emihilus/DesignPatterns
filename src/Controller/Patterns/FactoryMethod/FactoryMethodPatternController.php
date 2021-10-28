<?php

namespace App\Controller\Patterns\FactoryMethod;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Patterns\FactoryMethod\Classes\BMW;
use App\Controller\Patterns\FactoryMethod\Classes\Ford;
use App\Controller\Patterns\FactoryMethod\Classes\CarFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FactoryMethodPatternController extends AbstractController
{
    public static string $output = '';


    /**
     * @Route("/factoryMethod-pattern", name="factoryMethod-pattern")
     */
    public function client(): Response
    {
        $cars = [];
        $cars[] = CarFactory::createCar(BMW::class, "X5");
        $cars[] = CarFactory::createCar(BMW::class, "E60");
        $cars[] = CarFactory::createCar(BMW::class, "E60");
        $cars[] = CarFactory::createCar(BMW::class, "X5");
        $cars[] = CarFactory::createCar(Ford::class, "Focus");
        $cars[] = CarFactory::createCar(Ford::class, "CMax");
        $cars[] = CarFactory::createCar(Ford::class, "CMax");

        foreach ($cars as $car) 
        {
            $car->printSelf();
        }

        return $this->render('patterns/factoryMethod.html.twig', [
            'controller_name' => 'FactoryMethod PatternController',
            'output' => static::$output
        ]);
    }
}
