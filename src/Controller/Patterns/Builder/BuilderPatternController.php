<?php

namespace App\Controller\Patterns\Builder;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Patterns\Builder\Auction;
use App\Controller\Patterns\Builder\AuctionC;

class BuilderPatternController extends AbstractController
{
    /**
     * @Route("/builder-pattern", name="builder-pattern")
     */
    public function index(): Response
    {
        $auctionBuilder = new AuctionBuilder('Piec wędzarniczy');
        $auctionBuilder->description('deskrypcja')
        ->startingPrice(200)
        ->offers(['200', '300'])
        ->owner('Maciej')
        ->mainImgPath('c:/windows');
        $auction = $auctionBuilder->build();

        dump($auction);
        
        $auctionBuilderBetter = new AuctionBuilderBetter();
        $auction2 = $auctionBuilderBetter->title('Marcin')
        ->description('Mama wie')
        ->startingPrice(2003)
        ->offers(['marcin' => 200, 'tomek' => 3333])
        ->owner('Andariusz')
        ->build();
         var_dump($auction2);
        dump($auction2);

        //  With director
        $auctionCBuilder = new AuctionCBuilder;
        $acDirector = new AuctionCDirector;

        $acDirector->setBuilder($auctionCBuilder);
        $acDirector->buildPiecWendzarniczy();
        $auctionCBuilder->setTitle('Fajny piec wędzarniczy')
        ->setDescription('Niefajnosc poziomu 09999')
        ->setLoadability(8000)
        ->setStartingPrice(22331)
        ->setOwner('Mateush')
        ->setOffers([1,2,3]);
        
        $auctionC = $auctionCBuilder->build();
        $auctionC->printSelf();

        dump($auctionC);

        $acDirector->buildLaptop();
        $auctionCBuilder->setTitle('LAptop acre nitrous oxide')
        ->setDescription('Ryzen 200003 rtx gtx 40000')
        ->setStartingPrice(22331)
        ->setOwner('Mateush')
        ->setOffers([1,2,3])
        ->setClock('2322 PhZ');

        $auctionC2 = $auctionCBuilder->build();

        $auctionC2->printSelf();
        dump($auctionC2);


        return $this->render('patterns/builder.html.twig', [
            'controller_name' => 'BuilderPatternController',
        ]);
    }
}
