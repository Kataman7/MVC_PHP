<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\AbstractDataObject;
use App\Modele\DataObject\ImageProduit;

class ImageProduitRepository extends AbstractRepository
{

    protected function getNomTable(): string
    {
        return 'image_produit';
    }

    protected function getNomClesPrimaires(): array
    {
        return ['chemin', 'codeProduit'];
    }

    protected function getNomColonne(): array
    {
        return ['chemin', 'codeProduit', 'ordre'];
    }

    protected function formatSQLArray(AbstractDataObject $objet): array
    {
        /** @var ImageProduit $objet */
        return array(
            'chemin' => $objet->getChemin(),
            'codeProduit' => $objet->getCodeProduit(),
            'ordre' => $objet->getOrdre()
        );
    }

    protected function constuireDepuisSQLArray(array $objetFormatTableau): AbstractDataObject
    {
        return new ImageProduit(
            $objetFormatTableau['codeProduit'],
            $objetFormatTableau['chemin'],
            $objetFormatTableau['ordre']
        );
    }
}