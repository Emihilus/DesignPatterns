<?php

namespace App\Controller\Patterns\Flyweight\Classes;

class ColorRepository
{
    private static Color $white;
    private static Color $black;


    public static function staticInit()
    {
        static::$white = new Color(255,255,255);
        static::$black = new Color(0,0,0);
    }

    /**
     * @return Color
     */
    public function getWhite(): Color
    {
        return static::$white;
    }

    /**
     * @return Color
     */
    public function getBlack(): Color
    {
        return static::$black;
    }


}