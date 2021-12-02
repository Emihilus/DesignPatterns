<?php

namespace App\Controller\Patterns\Flyweight;

use App\Controller\Patterns\Flyweight\Classes\BlackQueen;
use App\Controller\Patterns\Flyweight\Classes\ColorRepository;
use App\Controller\Patterns\Flyweight\Classes\WhiteQueen;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FlyweightPatternController extends AbstractController
{
    public static string $output = '';


    /**
     * @Route("/flyweight-pattern", name="flyweight-pattern")
     */
    public function client(): Response
    {
        ColorRepository::staticInit();

        $chesses = [
            new BlackQueen('Czarna Królowa'),
            new WhiteQueen('Biała Królowa')];

        foreach ($chesses as $chess)
        {
            $chess->printSelf();
        }

        return $this->render('patterns/flyweight.html.twig', [
            'controller_name' => 'Flyweight PatternController',
            'output' => static::$output
        ]);
    }
}
