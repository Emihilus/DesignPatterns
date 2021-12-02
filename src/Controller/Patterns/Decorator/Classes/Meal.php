<?php

namespace App\Controller\Patterns\Decorator\Classes;

use App\Controller\Patterns\Decorator\DecoratorPatternController;

abstract class Meal
{
    public function prepareMeal()
    {
        DecoratorPatternController::$output .= 'Preparing food...<br>';
    }
}