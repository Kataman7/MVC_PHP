<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\AbstractDataObject;
use App\Modele\DataObject\Utilisateur;

class UtilisateurRepository extends AbstractRepository
{
    protected function getNomTable(): string
    {
        return 'utilisateur';
    }

    public function getNomClesPrimaires(): array
    {
        return ['codeUtilisateur'];
    }

    protected function getNomColonne(): array
    {
        return ['codeUtilisateur', 'email', 'motDePasse', 'nomUtilisateur', 'prenom', 'role', 'codePanier'];
    }

    protected function formatSQLArray(AbstractDataObject $objet): array
    {
        /** @var Utilisateur $objet */
        return array(
            'codeUtilisateur' => $objet->getCodeUtilisateur(),
            'email' => $objet->getEmail(),
            'motDePasse' => $objet->getMotDePasse(),
            'nomUtilisateur' => $objet->getNomUtilisateur(),
            'prenom' => $objet->getPrenom(),
            'role' => $objet->getRole(),
            'codePanier' => $objet->getCodePanier()
        );
    }

    public function constuireDepuisSQLArray(array $objetFormatTableau): AbstractDataObject
    {
        return new Utilisateur(
            $objetFormatTableau['codeUtilisateur'],
            $objetFormatTableau['email'],
            $objetFormatTableau['motDePasse'],
            $objetFormatTableau['nomUtilisateur'],
            $objetFormatTableau['prenom'],
            $objetFormatTableau['role'],
            $objetFormatTableau['codePanier']
        );
    }
}