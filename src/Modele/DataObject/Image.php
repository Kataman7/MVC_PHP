<?php

namespace App\Modele\DataObject;

class Image extends AbstractDataObject
{
    private string $chemin;

    public function __construct(string $chemin)
    {
        $this->chemin = $chemin;
    }

    public function getChemin(): string
    {
        return $this->chemin;
    }
}