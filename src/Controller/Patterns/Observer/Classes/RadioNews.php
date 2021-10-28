<?php

namespace App\Controller\Patterns\Observer\Classes;

use App\Controller\Patterns\Observer\Interfaces\Observer;
use App\Controller\Patterns\Observer\ObserverPatternController;

class RadioNews implements Observer
{
    public function updateForecast(WeatherForecast $weatherForecast): void
    {
        ObserverPatternController::$output .= "RADIO broadcasts new weather data: ".$weatherForecast->getTemperature()." temp. and ".$weatherForecast->getPressure()." pressure <br>";
    }
}