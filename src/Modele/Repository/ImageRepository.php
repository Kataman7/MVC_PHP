<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\AbstractDataObject;
use App\Modele\DataObject\Image;

class ImageRepository extends AbstractRepository
{

    protected function getNomTable(): string
    {
        return 'image';
    }

    protected function getNomClesPrimaires(): array
    {
        return ['chemin'];
    }

    protected function getNomColonne(): array
    {
        return ['chemin'];
    }

    protected function formatSQLArray(AbstractDataObject $objet): array
    {
        /** @var Image $objet */
        return array(
            'chemin' => $objet->getChemin()
        );
    }

    protected function constuireDepuisSQLArray(array $objetFormatTableau): AbstractDataObject
    {
        return new Image(
            $objetFormatTableau['chemin']
        );
    }
}