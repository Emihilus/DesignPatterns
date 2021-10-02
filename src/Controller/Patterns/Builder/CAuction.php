<?php 

namespace App\Controller\Patterns\Builder;

class AuctionC
{
    public function printSelf()
    {
        print 'msg';
    }
}

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

class AuctionCBuilder implements Builder
{
    private AuctionC $auction;

    function __construct()
    {
        $this->auction = new AuctionC;
    }

    public function reset()
    {
        $this->auction = new AuctionC;
    }





    public function setType($type): self
    {
        $this->auction->type = $type;
        return $this;
    }

    public function setTitle($title): self
    {
        $this->auction->title = $title;
        return $this;
    }


    public function setDescription($description): self
    {
        $this->auction->description = $description;
        return $this;
    }

    public function setStartingPrice($startingPrice): self
    {
        $this->auction->startingPrice = $startingPrice;
        return $this;
    }

    public function setOwner($owner): self
    {
        $this->auction->owner = $owner;
        return $this;
    }

    public function setMainImgPath($mainImgPath): self
    {
        $this->auction->mainImgPath = $mainImgPath;
        return $this;
    }

    public function setOffers($offers): self
    {
        $this->auction->offers = $offers;
        return $this;
    }



    // specific for piec wedzarniczy
    public function setLoadability($loadability): self
    {
        $this->auction->loadability = $loadability;
        return $this;
    }


     // specific for laptop
     public function setClock($clock): self
     {
         $this->auction->clock = $clock;
         return $this;
     }




    public function build(): AuctionC
    {
        if (!isset($this->auction->type))
             throw new \InvalidArgumentException("Type cannot be empty");

       if (!isset($this->auction->title))
            throw new \InvalidArgumentException("Title cannot be empty");

        if (!isset($this->auction->description))
            throw new \InvalidArgumentException("Description cannot be empty");

        if (!isset($this->auction->startingPrice))
            throw new \InvalidArgumentException("Starting price cannot be empty");

        if (!isset($this->auction->owner))
            throw new \InvalidArgumentException("Owner cannot be empty");

        $result = $this->auction;
        $this->reset();
        return $result;
    }

}

class AuctionCDirector
{
    private Builder $builder;

    public function setBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function buildPiecWendzarniczy(): void
    {
        $this->builder->setType(0);
    }

    public function buildLaptop(): void
    {
        $this->builder->setType(1);
    }
}