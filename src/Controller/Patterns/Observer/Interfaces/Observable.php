<?php

namespace App\Controller\Patterns\Observer\Interfaces;

use App\Controller\Patterns\Observer\Interfaces\Observer;

interface Observable
{
    function registerObserver(Observer $observer) : void;

    function unregisterObserver(Observer $observer) : void;

    function notifyObservers(): void;
}