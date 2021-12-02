<?php

namespace App\Controller\Patterns\Decorator;

use App\Controller\Patterns\Decorator\Classes\ChickenMealDecorator;
use App\Controller\Patterns\Decorator\Classes\PotatoMeal;
use App\Controller\Patterns\Decorator\Classes\RiceMeal;
use App\Controller\Patterns\Decorator\Classes\Meal;
use App\Controller\Patterns\Decorator\Classes\SauceMealDecorator;
use App\Controller\Patterns\Decorator\Classes\ShrimpMealDecorator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DecoratorPatternController extends AbstractController
{
    public static string $output = '';


    /**
     * @Route("/decorator-pattern", name="decorator-pattern")
     */
    public function client(): Response
    {
        static::$output .= "Nowy posiłek: <br>";
        $riceMeal = new RiceMeal();
        $riceMeal->prepareMeal();
        static::$output .= "Nowy posiłek: <br>";
        $riceMealWithShrimp = new ShrimpMealDecorator(new RiceMeal());
        $riceMealWithShrimp->prepareMeal();
        static::$output .= "Nowy posiłek: <br>";
        $potatoMealWithChickenAndSauce = new SauceMealDecorator(new ChickenMealDecorator(new PotatoMeal()));
        $potatoMealWithChickenAndSauce->prepareMeal();

        return $this->render('patterns/decorator.html.twig', [
            'controller_name' => 'Decorator PatternController',
            'output' => static::$output
        ]);
    }
}
