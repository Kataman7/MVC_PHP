<?php

namespace App\Modele\DataObject;

use Cassandra\Date;

class Commande extends AbstractDataObject
{
    private int $codeCommande;
    private string $dateCommande;
    private int $codeAdresse;
    private int $codeUtilisateur;
    private int $codePanier;

    public function __construct(int $codeCommande, string $dateCommande, int $codeAdresse, int $codeUtilisateur, int $codePanier)
    {
        $this->codeCommande = $codeCommande;
        $this->dateCommande = $dateCommande;
        $this->codeAdresse = $codeAdresse;
        $this->codeUtilisateur = $codeUtilisateur;
        $this->codePanier = $codePanier;
    }

    public function getCodeCommande(): int
    {
        return $this->codeCommande;
    }

    public function getDateCommande(): string
    {
        return $this->dateCommande;
    }

    public function getCodeAdresse(): int
    {
        return $this->codeAdresse;
    }

    public function getCodeUtilisateur(): int
    {
        return $this->codeUtilisateur;
    }

    public function getCodePanier(): int
    {
        return $this->codePanier;
    }
}