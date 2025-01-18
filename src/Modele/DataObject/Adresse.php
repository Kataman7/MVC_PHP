<?php

namespace App\Modele\DataObject;

class Adresse extends AbstractDataObject
{
    private int $codeAdresse;
    private string $voie;
    private string $complement;
    private string $code_postal;
    private string $ville;
    private string $pays;

    public function __construct(int $codeAdresse, string $voie, string $complement, string $code_postal, string $ville, string $pays)
    {
        $this->codeAdresse = $codeAdresse;
        $this->voie = $voie;
        $this->complement = $complement;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
        $this->pays = $pays;
    }

    public function getCodeAdresse(): int
    {
        return $this->codeAdresse;
    }

    public function getVoie(): string
    {
        return $this->voie;
    }

    public function getComplement(): string
    {
        return $this->complement;
    }

    public function getCodePostal(): string
    {
        return $this->code_postal;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function getPays(): string
    {
        return $this->pays;
    }
}