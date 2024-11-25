<?php

namespace App\Modele\DataObject;

class Utilisateur extends AbstractDataObject
{
    private string $login;
    private string $mdp;
    private string $nom_utilisateur;
    private string $prenom;
    private string $role;

    public function __construct(string $login, string $mdp, string $nom_utilisateur, string $prenom, string $role)
    {
        $this->login = $login;
        $this->mdp = $mdp;
        $this->nom_utilisateur = $nom_utilisateur;
        $this->prenom = $prenom;
        $this->role = $role;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function getMdp(): string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): void
    {
        $this->mdp = $mdp;
    }

    public function getNomUtilisateur(): string
    {
        return $this->nom_utilisateur;
    }

    public function setNomUtilisateur(string $nom_utilisateur): void
    {
        $this->nom_utilisateur = $nom_utilisateur;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }
}