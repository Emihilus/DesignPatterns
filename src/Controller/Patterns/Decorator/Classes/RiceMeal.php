<?php

namespace App\Controller\Patterns\Decorator\Classes;

use App\Controller\Patterns\Decorator\DecoratorPatternController;

class RiceMeal extends Meal
{
    public function prepareMeal()
    {
        DecoratorPatternController::$output .= 'Preparing food on rice base...<br>';
    }
}