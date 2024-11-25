<?php

namespace App\Modele\Repository;

use App\Modele\DataObject\AbstractDataObject;
use App\Modele\DataObject\Admin;
use App\Modele\DataObject\Utilisateur;
use App\Modele\Repository\AbstractRepository;

class UtilisateurRepository extends AbstractRepository
{
    protected function getTableName(): string
    {
        return 'utilisateur';
    }

    public function getPrimaryKeyNames(): array
    {
        return ['login'];
    }

    protected function getColumnNames(): array
    {
        return ['login', 'mdp', 'nom', 'prenom', 'role'];
    }

    /**
     * @return array
     * @var Utilisateur $object
     */
    protected function formatSQLArray(AbstractDataObject $objet): array
    {
        /** @var Utilisateur $objet */
        return array(
            'login' => $objet->getLogin(),
            'mdp' => $objet->getMdp(),
            'nom' => $objet->getNomUtilisateur(),
            'prenom' => $objet->getPrenom(),
            'role' => $objet->getRole(),
        );
    }

    public function constructFromSQLArray(array $objetFormatTableau): AbstractDataObject
    {
        return new Utilisateur(
            $objetFormatTableau['login'],
            $objetFormatTableau['mdp'],
            $objetFormatTableau['nom'],
            $objetFormatTableau['prenom'],
            $objetFormatTableau['role']
        );
    }
}