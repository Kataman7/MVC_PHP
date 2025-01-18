<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\AbstractDataObject;
use App\Modele\DataObject\Commande;

class CommandeRepository extends AbstractRepository
{

    protected function getNomTable(): string
    {
        return 'commande';
    }

    protected function getNomClesPrimaires(): array
    {
        return ['codeCommande'];
    }

    protected function getNomColonne(): array
    {
        return ['codeCommande', 'dateCommande', 'codeAdresse', 'codeUtilisateur', 'codePanier'];
    }

    protected function formatSQLArray(AbstractDataObject $objet): array
    {
        /** @var Commande $objet */
        return array(
            'codeCommande' => $objet->getCodeCommande(),
            'dateCommande' => $objet->getDateCommande(),
            'codeAdresse' => $objet->getCodeAdresse(),
            'codeUtilisateur' => $objet->getCodeUtilisateur(),
            'codePanier' => $objet->getCodePanier()
        );
    }

    protected function constuireDepuisSQLArray(array $objetFormatTableau): AbstractDataObject
    {
        return new Commande(
            $objetFormatTableau['codeCommande'],
            $objetFormatTableau['dateCommande'],
            $objetFormatTableau['codeAdresse'],
            $objetFormatTableau['codeUtilisateur'],
            $objetFormatTableau['codePanier']
        );
    }
}