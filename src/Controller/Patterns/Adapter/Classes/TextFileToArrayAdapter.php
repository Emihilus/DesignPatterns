<?php

declare(strict_types=1);

namespace App\Controller\Patterns\Adapter\Classes;

class TextFileToArrayAdapter extends ArrayObject
{
    public function __construct(TextFile $textFile)
    {
        $this->textFile = $textFile;
    }

    public function getAll()
    {
        return file_get_contents($this->textFile->path);
    }

    public function getSpecific($pos)
    {
        return file($this->textFile->path)[$pos];
    }
}