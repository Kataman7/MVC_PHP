<?php

namespace App\Modele\DataObject;

class ImageProduit extends AbstractDataObject
{
    private int $codeProduit;
    private string $chemin;
    private int $ordre;

    public function __construct(int $codeProduit, string $chemin, int $ordre)
    {
        $this->codeProduit = $codeProduit;
        $this->chemin = $chemin;
        $this->ordre = $ordre;
    }

    public function getCodeProduit(): int
    {
        return $this->codeProduit;
    }

    public function getChemin(): string
    {
        return $this->chemin;
    }

    public function getOrdre(): int
    {
        return $this->ordre;
    }
}