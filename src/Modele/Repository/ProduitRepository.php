<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\AbstractDataObject;
use App\Modele\DataObject\Produit;

class ProduitRepository extends AbstractRepository
{

    protected function getNomTable(): string
    {
        return 'produit';
    }

    protected function getNomClesPrimaires(): array
    {
        return ['codeProduit'];
    }

    protected function getNomColonne(): array
    {
        return ['codeProduit', 'nomProduit', 'descriptionLongue', 'descriptionRapide', 'poids', 'prix', 'quantite'];
    }

    protected function formatSQLArray(AbstractDataObject $objet): array
    {
        /** @var Produit $objet */
        return array(
            'codeProduit' => $objet->getCodeProduit(),
            'nomProduit' => $objet->getNomProduit(),
            'descriptionLongue' => $objet->getDescriptionLongue(),
            'descriptionRapide' => $objet->getDescriptionRapide(),
            'poids' => $objet->getPoids(),
            'prix' => $objet->getPrix(),
            'quantite' => $objet->getQuantite()
        );
    }

    protected function constuireDepuisSQLArray(array $objetFormatTableau): AbstractDataObject
    {
        return new Produit(
            $objetFormatTableau['codeProduit'],
            $objetFormatTableau['nomProduit'],
            $objetFormatTableau['descriptionLongue'],
            $objetFormatTableau['descriptionRapide'],
            $objetFormatTableau['poids'],
            $objetFormatTableau['prix'],
            $objetFormatTableau['quantite']
        );
    }
}