<?php

namespace App\Controller\Patterns\AbstractFactory;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Patterns\AbstractFactory\Classes\BMW;
use App\Controller\Patterns\AbstractFactory\Classes\Ford;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Controller\Patterns\AbstractFactory\Factory\IslandCarFactory;
use App\Controller\Patterns\AbstractFactory\Factory\ContinentalCarFactory;

class AbstractFactoryPatternController extends AbstractController
{
    public static string $output = '';


    /**
     * @Route("/abstractFactory-pattern", name="abstractFactory-pattern")
     */
    public function client(): Response
    {
        $cars = [];
        $cars[] = ContinentalCarFactory::createBMW("X5");
        $cars[] = IslandCarFactory::createBMW("E60");
        $cars[] = ContinentalCarFactory::createBMW("E60");
        $cars[] = ContinentalCarFactory::createBMW("X5");
        $cars[] = IslandCarFactory::createFord("Focus");
        $cars[] = ContinentalCarFactory::createFord("CMax");
        $cars[] = ContinentalCarFactory::createFord("CMax");

        foreach ($cars as $car) 
        {
            $car->printSelf();
        }

        return $this->render('patterns/abstractFactory.html.twig', [
            'controller_name' => 'AbstractFactory PatternController',
            'output' => static::$output
        ]);
    }
}
