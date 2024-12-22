<?php

namespace App\Modele\DataObject;

class Produit extends AbstractDataObject
{
    private int $codeProduit;
    private string $nomProduit;
    private string $descriptionLongue;
    private string $descriptionRapide;
    private float $poids;
    private float $prix;
    private int $quantite;

    public function __construct(int $codeProduit, string $nomProduit, string $descriptionLongue, string $descriptionRapide, float $poids, float $prix, int $quantite)
    {
        $this->codeProduit = $codeProduit;
        $this->nomProduit = $nomProduit;
        $this->descriptionLongue = $descriptionLongue;
        $this->descriptionRapide = $descriptionRapide;
        $this->poids = $poids;
        $this->prix = $prix;
        $this->quantite = $quantite;
    }
    public function getCodeProduit(): int
    {
        return $this->codeProduit;
    }
    public function getNomProduit(): string
    {
        return $this->nomProduit;
    }
    public function getDescriptionLongue(): string
    {
        return $this->descriptionLongue;
    }
    public function getDescriptionRapide(): string
    {
        return $this->descriptionRapide;
    }
    public function getPoids(): float
    {
        return $this->poids;
    }
    public function getPrix(): float
    {
        return $this->prix;
    }
    public function getQuantite(): int
    {
        return $this->quantite;
    }
    public function setNomProduit(string $nomProduit): void
    {
        $this->nomProduit = $nomProduit;
    }
    public function setDescriptionLongue(string $descriptionLongue): void
    {
        $this->descriptionLongue = $descriptionLongue;
    }
    public function setDescriptionRapide(string $descriptionRapide): void
    {
        $this->descriptionRapide = $descriptionRapide;
    }
    public function setPoids(float $poids): void
    {
        $this->poids = $poids;
    }
    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }
    public function setQuantite(int $quantite): void
    {
        $this->quantite = $quantite;
    }
}