<?php

namespace App\Modele\DataObject;

class CommandeAdresse extends AbstractDataObject
{
    private int $codeCommande;
    private int $codeAdresse;

    public function __construct(int $codeCommande, int $codeAdresse)
    {
        $this->codeCommande = $codeCommande;
        $this->codeAdresse = $codeAdresse;
    }

    public function getCodeCommande(): int
    {
        return $this->codeCommande;
    }

    public function getCodeAdresse(): int
    {
        return $this->codeAdresse;
    }
}