<?php

namespace App\Controller\Patterns\Decorator\Classes;

use App\Controller\Patterns\Decorator\DecoratorPatternController;

class ChickenMealDecorator extends MealDecorator
{
    public function __construct(Meal $meal)
    {
        parent::__construct($meal);
    }

    public function prepareMeal()
    {
        $this->meal->prepareMeal();
        $this->addChicken();
    }

    public function addChicken()
    {
        DecoratorPatternController::$output .= 'Adding Chicken to meal.<br>';
    }
}