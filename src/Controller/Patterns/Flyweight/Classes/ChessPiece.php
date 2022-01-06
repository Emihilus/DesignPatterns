<?php

namespace App\Controller\Patterns\Flyweight\Classes;

use App\Controller\Patterns\Flyweight\FlyweightPatternController;


abstract class ChessPiece
{
    private string $name;
    private int $numberPosition;
    private string $letterPosition;
    private Color $color;

    /**
     * @param string $name
     * @param int $numberPosition
     * @param string $letterPosition
     */
    public function __construct(string $name, int $numberPosition, string $letterPosition, string $color)
    {
        $this->name = $name;
        $this->numberPosition = $numberPosition;
        $this->letterPosition = $letterPosition;
        switch ($color) {
            case 'white':
                $this->color = ColorRepository::getWhite();
                break;

            case 'black':
                $this->color = ColorRepository::getBlack();
                break;
        }
    }

    public function printSelf()
    {
        FlyweightPatternController::$output .= "<span style='color:rgb(" . $this->color->getRed() . ", " . $this->color->getGreen() . ", " . $this->color->getBlue() . ");'>Name: " . $this->name . ", Position: " . $this->numberPosition . $this->letterPosition . "</span><br>";
    }
}