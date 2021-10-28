<?php

namespace App\Controller\Patterns\Builder\First;

class AuctionBuilder
{
    private string $title; // req
    private string $description; // req
    private string $mainImgPath;
    private int $startingPrice; // req
    private $offers;
    private string $owner; // req

    function __construct($title)
    {
        $this->title = $title;
    }

    public function description($description): self
    {
        $this->description = $description;
        return $this;
    }

    public function startingPrice($startingPrice): self
    {
        $this->startingPrice = $startingPrice;
        return $this;
    }

    public function owner($owner): self
    {
        $this->owner = $owner;
        return $this;
    }


    public function mainImgPath($mainImgPath): self
    {
        $this->mainImgPath = $mainImgPath;
        return $this;
    }

    public function offers($offers): self
    {
        $this->offers = $offers;
        return $this;
    }


    public function build(): Auction
    {
        $auction = new Auction;

        if (isset($this->title))
            $auction->title = $this->title;

        if (isset($this->description))
            $auction->description = $this->description;
        else 
            throw new \InvalidArgumentException("Description cannot be empty");

        if (isset($this->startingPrice))
            $auction->startingPrice = $this->startingPrice;
        else
            throw new \InvalidArgumentException("Starting price cannot be empty");

        if (isset($this->owner))
            $auction->owner = $this->owner;
        else
            throw new \InvalidArgumentException("Owner cannot be empty");

        $auction->offers = $this->offers;
        $auction->mainImgPath = $this->mainImgPath;

        return $auction;
    }

    
}

class AuctionBuilderBetter
{
    private Auction $auction;

    function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->auction = new Auction;
    }

    public function title($title): self
    {
        $this->auction->title = $title;
        return $this;
    }

    public function description($description): self
    {
        $this->auction->description = $description;
        return $this;
    }

    public function startingPrice($startingPrice): self
    {
        $this->auction->startingPrice = $startingPrice;
        return $this;
    }

    public function owner($owner): self
    {
        $this->auction->owner = $owner;
        return $this;
    }


    public function mainImgPath($mainImgPath): self
    {
        $this->auction->mainImgPath = $mainImgPath;
        return $this;
    }

    public function offers($offers): self
    {
        $this->auction->offers = $offers;
        return $this;
    }


    public function build(): Auction
    {
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
