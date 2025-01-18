<?php

namespace App\Modele\DataObject;

class Utilisateur extends AbstractDataObject
{
    private int $codeUtilisateur;
    private string $email;
    private string $motDePasse;
    private string $nomUtilisateur;
    private string $prenom;
    private string $role;
    private int $codePanier;

    public function __construct(int $codeUtilisateur, string $email, string $motDePasse, string $nomUtilisateur, string $prenom, string $role, int $codePanier)
    {
        $this->codeUtilisateur = $codeUtilisateur;
        $this->email = $email;
        $this->motDePasse = $motDePasse;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->prenom = $prenom;
        $this->role = $role;
        $this->codePanier = $codePanier;
    }

    public function getCodeUtilisateur(): int
    {
        return $this->codeUtilisateur;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getMotDePasse(): string
    {
        return $this->motDePasse;
    }
    public function getNomUtilisateur(): string
    {
        return $this->nomUtilisateur;
    }
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function getRole(): string
    {
        return $this->role;
    }
    public function getCodePanier(): int
    {
        return $this->codePanier;
    }
    public function setCodeUtilisateur(int $codeUtilisateur): void
    {
        $this->codeUtilisateur = $codeUtilisateur;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function setMotDePasse(string $motDePasse): void
    {
        $this->motDePasse = $motDePasse;
    }
    public function setNomUtilisateur(string $nomUtilisateur): void
    {
        $this->nomUtilisateur = $nomUtilisateur;
    }
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }
    public function setRole(string $role): void
    {
        $this->role = $role;
    }
    public function setCodePanier(int $codePanier): void
    {
        $this->codePanier = $codePanier;
    }
}