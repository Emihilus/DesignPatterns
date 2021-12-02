<?php

namespace App\Controller\Patterns\Decorator\Classes;

abstract class MealDecorator extends Meal
{
    public Meal $meal;

    public function __construct(Meal $meal)
    {
        $this->meal = $meal;
    }

    public function prepareMeal()
    {
        $this->meal->prepareMeal();
    }
}