<?php

namespace App\Controller\Patterns\Decorator\Classes;

use App\Controller\Patterns\Decorator\DecoratorPatternController;

class PotatoMeal extends Meal
{
    public function prepareMeal()
    {
        DecoratorPatternController::$output .= 'Preparing food on potatoes base...<br>';
    }
}