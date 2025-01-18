<?php

namespace App\Modele\DataObject;

class PanierProduit extends AbstractDataObject
{
    private int $codeProduit;
    private int $codePanier;
    private int $quantite;

    public function __construct(int $codeProduit, int $codePanier, int $quantite)
    {
        $this->codeProduit = $codeProduit;
        $this->codePanier = $codePanier;
        $this->quantite = $quantite;
    }

    public function getCodeProduit(): int
    {
        return $this->codeProduit;
    }

    public function getCodePanier(): int
    {
        return $this->codePanier;
    }

    public function getQuantite(): int
    {
        return $this->quantite;
    }
}