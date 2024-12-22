<?php

namespace App\Controleur;

use App\Modele\DataObject\Produit;
use App\Modele\Repository\ProduitRepository;

class ControleurProduit extends ControleurGenerique
{
    public static function creerProduitDepuisFormulaire()
    {
        $nomProduit = $_POST['nomProduit'];
        $descriptionLongue = $_POST['descriptionLongue'];
        $descriptionRapide = $_POST['descriptionRapide'];
        $poids = $_POST['poids'];
        $prix = $_POST['prix'];

        $produit = new Produit($nomProduit, $descriptionLongue, $descriptionRapide, $poids, $prix);
        $produitRepository = new ProduitRepository();

    }
}