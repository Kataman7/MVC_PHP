<?php

namespace App\Modele\DataObject;

class Panier extends AbstractDataObject
{
    private int $codePanier;

    public function __construct(int $codePanier)
    {
        $this->codePanier = $codePanier;
    }

    public function getCodePanier(): int
    {
        return $this->codePanier;
    }

    public function setCodePanier(int $codePanier): void
    {
        $this->codePanier = $codePanier;
    }
}