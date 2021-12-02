<?php

namespace App\Controller\Patterns\Flyweight\Classes;

class WhiteQueen extends ChessPiece
{
    public function __construct(string $name)
    {
        parent::__construct($name, 8, 'e', 'white');
    }
}