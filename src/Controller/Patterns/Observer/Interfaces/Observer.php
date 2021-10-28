<?php

namespace App\Controller\Patterns\Observer\Interfaces;

use App\Controller\Patterns\Observer\Classes\WeatherForecast;

interface Observer
{
    function updateForecast(WeatherForecast $weatherForecast): void;
}