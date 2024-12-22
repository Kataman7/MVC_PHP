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
        return ['email'];
    }

    protected function getNomColonne(): array
    {
        return ['email', 'motDePasse', 'nomUtilisateur', 'prenom', 'role'];
    }

    protected function formatSQLArray(AbstractDataObject $objet): array
    {
        /** @var Utilisateur $objet */
        return array(
            'email' => $objet->getEmail(),
            'motDePasse' => $objet->getMotDePasse(),
            'nomUtilisateur' => $objet->getNomUtilisateur(),
            'prenom' => $objet->getPrenom(),
            'role' => $objet->getRole()
        );
    }

    public function constuireDepuisSQLArray(array $objetFormatTableau): AbstractDataObject
    {
        return new Utilisateur(
            $objetFormatTableau['email'],
            $objetFormatTableau['motDePasse'],
            $objetFormatTableau['nomUtilisateur'],
            $objetFormatTableau['prenom'],
            $objetFormatTableau['role']
        );
    }
}