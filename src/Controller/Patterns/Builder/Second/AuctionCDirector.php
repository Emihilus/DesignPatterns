<?php 

namespace App\Controller\Patterns\Builder\Second;

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