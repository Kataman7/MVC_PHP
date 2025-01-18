<?php

namespace App\Modele\DataObject;

class UtilisateurAdresse extends AbstractDataObject
{
    private int $codeUtilisateur;
    private int $codeAdresse;

    public function __construct(int $codeUtilisateur, int $codeAdresse)
    {
        $this->codeUtilisateur = $codeUtilisateur;
        $this->codeAdresse = $codeAdresse;
    }

    public function getCodeUtilisateur(): int
    {
        return $this->codeUtilisateur;
    }

    public function getCodeAdresse(): int
    {
        return $this->codeAdresse;
    }
}