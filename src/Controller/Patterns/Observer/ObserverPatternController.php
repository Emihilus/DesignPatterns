<?php

namespace App\Controller\Patterns\Observer;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Patterns\Observer\Classes\TvNews;
use App\Controller\Patterns\Observer\Classes\RadioNews;
use App\Controller\Patterns\Observer\Classes\InternetNews;
use App\Controller\Patterns\Observer\Classes\WeatherForecast;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ObserverPatternController extends AbstractController
{
    public static string $output = '';


    /**
     * @Route("/observer-pattern", name="observer-pattern")
     */
    public function client(): Response
    {
        $weatherForecast = new WeatherForecast();

        $radioNews = new RadioNews();
        $tvNews = new TvNews();
        $internetNews = new InternetNews();

        $weatherForecast->registerObserver($radioNews);
        $weatherForecast->registerObserver($tvNews);
        $weatherForecast->registerObserver($internetNews);

        $weatherForecast->notifyObservers();

        $weatherForecast->unregisterObserver($radioNews);
        $weatherForecast->unregisterObserver($tvNews);

        $weatherForecast->randomize();
        $weatherForecast->notifyObservers();


        return $this->render('patterns/observer.html.twig', [
            'controller_name' => 'Observer PatternController',
            'output' => static::$output
        ]);
    }
}
