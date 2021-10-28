<?php

namespace App\Controller\Patterns\Observer\Classes;

use App\Controller\Patterns\Observer\Interfaces\Observer;
use App\Controller\Patterns\Observer\Interfaces\Observable;
use App\Controller\Patterns\Observer\ObserverPatternController;

class WeatherForecast implements Observable
{
    private int $temperature;
    private int $pressure;
    private $registeredObservers = [];


    public function registerObserver(Observer $observer): void
    {
        $this->registeredObservers[] = $observer;
        $this->randomize();
    }

    public function unregisterObserver(Observer $observer): void
    {
        for($i = 0; $i < count($this->registeredObservers); $i++)
        {
            if($this->registeredObservers[$i] == $observer)
                array_splice($this->registeredObservers,$i,1);
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->registeredObservers as $observer) 
        {
            $observer->updateForecast($this);
        }
        ObserverPatternController::$output .='<br>';
    }

    public function randomize()
    {
        $this->temperature = random_int(0,60);
        $this->pressure = random_int(900,1090);
       //$this->notifyObservers();
    }

    

    /**
     * Get the value of temperature
     */ 
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Get the value of pressure
     */ 
    public function getPressure()
    {
        return $this->pressure;
    }
}