<?php

namespace App\Controller\Patterns\Singleton;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Patterns\Singleton\Bolder;

class SingletonPatternController extends AbstractController
{
    /**
     * @Route("/singleton-pattern", name="singleton-pattern")
     */
    public function index(): Response
    {
        $text = 'Wachalrz wspomnień';
        dump($text);
        // $bolder = new Bolder;
        $bolder = Bolder::getInstance();
        $text = $bolder->b($text);
        dump($text);


        return $this->render('patterns/builder.html.twig', [
            'controller_name' => 'Singleton PatternController',
        ]);
    }
}
