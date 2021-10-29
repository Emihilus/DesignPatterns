<?php

namespace App\Controller\Patterns\Flyweight\Classes;

class BlackQueen extends ChessPiece
{
    public function __construct(string $name)
    {
        parent::__construct($name, 1, 'd', 'black');
    }
}