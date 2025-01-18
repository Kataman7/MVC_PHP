<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\AbstractDataObject;
use App\Modele\DataObject\UtilisateurAdresse;

class UtilisateurAdresseRepository extends AbstractRepository
{

    protected function getNomTable(): string
    {
        return 'utilisateur_adresse';
    }

    protected function getNomClesPrimaires(): array
    {
        return ['codeUtilisateur', 'codeAdresse'];
    }

    protected function getNomColonne(): array
    {
        return ['codeUtilisateur', 'codeAdresse'];
    }

    protected function formatSQLArray(AbstractDataObject $objet): array
    {
        /** @var UtilisateurAdresse $objet */
        return array(
            'codeUtilisateur' => $objet->getCodeUtilisateur(),
            'codeAdresse' => $objet->getCodeAdresse()
        );
    }

    protected function constuireDepuisSQLArray(array $objetFormatTableau): AbstractDataObject
    {
        return new UtilisateurAdresse(
            $objetFormatTableau['codeUtilisateur'],
            $objetFormatTableau['codeAdresse']
        );
    }
}