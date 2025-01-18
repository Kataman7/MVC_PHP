<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\AbstractDataObject;
use App\Modele\DataObject\PanierProduit;

class PanierProduitRepository extends AbstractRepository
{

    protected function getNomTable(): string
    {
        return 'panierProduitRepository';
    }

    protected function getNomClesPrimaires(): array
    {
        return ['codePanier', 'codeProduit'];
    }

    protected function getNomColonne(): array
    {
        return ['codePanier', 'codeProduit', 'quantite'];
    }

    protected function formatSQLArray(AbstractDataObject $objet): array
    {
        /** @var PanierProduit $objet */
        return array(
            'codePanier' => $objet->getCodePanier(),
            'codeProduit' => $objet->getCodeProduit(),
            'quantite' => $objet->getQuantite()
        );
    }

    protected function constuireDepuisSQLArray(array $objetFormatTableau): AbstractDataObject
    {
        return new PanierProduit(
            $objetFormatTableau['codePanier'],
            $objetFormatTableau['codeProduit'],
            $objetFormatTableau['quantite']
        );
    }
}