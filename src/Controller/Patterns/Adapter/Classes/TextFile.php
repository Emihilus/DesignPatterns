<?php

declare(strict_types=1);

namespace App\Controller\Patterns\Adapter\Classes;

class TextFile
{

    public function setPath($path)
    {
        $this->path = $path;
    }
    

    public function getAll() 
    {
        return file_get_contents($this->path);
    }

    public function printSecific($line)
    {
        return file($this->path)[$line];
    }
}