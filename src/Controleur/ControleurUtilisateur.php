<?php

namespace App\Controleur;

use App\Lib\MotDePasse;
use App\Lib\MessageFlash;
use App\Lib\ConnexionUtilisateur;
use App\Modele\Repository\UtilisateurRepository;
use App\Modele\DataObject\Utilisateur;


class ControleurUtilisateur extends ControleurGenerique
{
    public static function afficherAccueil(): void
    {
        self::afficherVue("vueGenerale.php", [
            "titre" => "Accueil",
            "cheminCorpsVue" => "utilisateur/vueAccueil.php",
            "messagesFlash" => MessageFlash::lireTousMessages(),
        ]);
    }

    public static function afficherFormulaireConnexion(): void
    {
        self::afficherVue("vueGenerale.php", [
            "titre" => "Connexion",
            "cheminCorpsVue" => "utilisateur/vueFormulaireConnexion.php"
        ]);
    }

    public static function connexion(): void
    {
        if (!isset($_REQUEST['login']) || !$_REQUEST['mdp']) {
            MessageFlash::ajouter("danger", "Veuillez remplir tous les champs");
        } else {
            $login = $_REQUEST['login'];
            $mdp = $_REQUEST['mdp'];
            /** @var Utilisateur $utilisateur **/
            $utilisateur = (new UtilisateurRepository())->getParClesPrimaires([$login]);
            if ($utilisateur != null && MotDePasse::verifier($mdp, $utilisateur->getMdp())) {
                ConnexionUtilisateur::connecter($login);
                MessageFlash::ajouter("success", "Connexion réussie");
            } else {
                MessageFlash::ajouter("danger", "Login ou mot de passe incorrect");
            }
        }
        header("Location: ?controleur=utilisateur&action=afficherAccueil");
        exit();
    }

    public static function deconnexion(): void
    {
        ConnexionUtilisateur::deconnecter();
        MessageFlash::ajouter("success", "Déconnexion réussie");
        header("Location: ?controleur=utilisateur&action=afficherAccueil");
        exit();
    }
}