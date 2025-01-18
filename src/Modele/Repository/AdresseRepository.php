<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\AbstractDataObject;
use App\Modele\DataObject\Adresse;

class AdresseRepository extends AbstractRepository
{

    protected function getNomTable(): string
    {
        return 'adresse';
    }

    protected function getNomClesPrimaires(): array
    {
        return ['codeAdresse'];
    }

    protected function getNomColonne(): array
    {
        return ['codeAdresse', 'voie', 'complement', 'codePostal', 'ville', 'pays'];
    }

    protected function formatSQLArray(AbstractDataObject $objet): array
    {
        /** @var Adresse $objet */
        return array(
            'codeAdresse' => $objet->getCodeAdresse(),
            'voie' => $objet->getVoie(),
            'complement' => $objet->getComplement(),
            'codePostal' => $objet->getCodePostal(),
            'ville' => $objet->getVille(),
            'pays' => $objet->getPays()
        );
    }

    protected function constuireDepuisSQLArray(array $objetFormatTableau): AbstractDataObject
    {
        return new Adresse(
            $objetFormatTableau['codeAdresse'],
            $objetFormatTableau['voie'],
            $objetFormatTableau['complement'],
            $objetFormatTableau['codePostal'],
            $objetFormatTableau['ville'],
            $objetFormatTableau['pays']
        );
    }
}