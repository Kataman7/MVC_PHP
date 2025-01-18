<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\AbstractDataObject;
use App\Modele\DataObject\Panier;

class PanierRepository extends AbstractRepository
{

    protected function getNomTable(): string
    {
        return 'panier';
    }

    protected function getNomClesPrimaires(): array
    {
        return ['codePanier'];
    }

    protected function getNomColonne(): array
    {
        return ['codePanier'];
    }

    protected function formatSQLArray(AbstractDataObject $objet): array
    {
        /** @var Panier $objet */
        return array(
            'codePanier' => $objet->getCodePanier()
        );
    }

    protected function constuireDepuisSQLArray(array $objetFormatTableau): AbstractDataObject
    {
        return new Panier(
            $objetFormatTableau['codePanier']
        );
    }
}