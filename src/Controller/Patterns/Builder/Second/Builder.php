<?php 

namespace App\Controller\Patterns\Builder\Second;


interface Builder
{
    public function setType($type): self;
    public function setTitle($title): self;
    public function setDescription($description): self;
    public function setOwner($owner): self;
    public function setStartingPrice($startingPrice): self;
    public function setMainImgPath($mainImgPath): self;
    public function setOffers($offers): self;

    public function build(): AuctionC;
}
