<?php

namespace App\Controller\Patterns\Decorator\Classes;

use App\Controller\Patterns\Decorator\DecoratorPatternController;

class SauceMealDecorator extends MealDecorator
{
    public function __construct(Meal $meal)
    {
        parent::__construct($meal);
    }

    public function prepareMeal()
    {
        $this->meal->prepareMeal();
        $this->addSauce();
    }

    public function addSauce()
    {
        DecoratorPatternController::$output .= 'Adding Sauce to The meal.<br>';
    }
}