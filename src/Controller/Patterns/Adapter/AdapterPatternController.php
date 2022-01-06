<?php

namespace App\Controller\Patterns\Adapter;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Patterns\Adapter\Classes\TextFile;
use App\Controller\Patterns\Adapter\Classes\ArrayObject;
use App\Controller\Patterns\Adapter\Classes\ArrayPrinter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Controller\Patterns\Adapter\Classes\TextFileToArrayAdapter;

class AdapterPatternController extends AbstractController
{
    public static string $output = '';

    /**
     * @Route("/adapter-pattern", name="adapter-pattern")
     */
    public function client(): Response
    {
        $arrayPrinter = new ArrayPrinter();
        
        $arrayObj = new ArrayObject(['first ', 'second ', 'last ']);

        $arrayPrinter->setArray($arrayObj);

        static::$output .= 'Drukowanie zwyklej tablicy:<br>';
        static::$output .= $arrayPrinter->printSpecificPosition(2);
        static::$output .= $arrayPrinter->printSpecificPosition(1);
        static::$output .= $arrayPrinter->printSelf();

        $textFile = new TextFile;
        $textFile->setPath('/opt/web-projects/DesignPatterns/src/Controller/Patterns/Adapter/marcin.txt');
        $adapter = new TextFileToArrayAdapter($textFile);

        $arrayPrinter->setArray($adapter);

        static::$output .= '<br>Drukowanie pliku zadaptowanego na tablicę:<br>';
        static::$output .= $arrayPrinter->printSpecificPosition(2);
        static::$output .= $arrayPrinter->printSpecificPosition(1);
        static::$output .= $arrayPrinter->printSelf();


        return $this->render('patterns/observer.html.twig', [
            'controller_name' => 'Adapter PatternController',
            'output' => static::$output
        ]);
    }
}
