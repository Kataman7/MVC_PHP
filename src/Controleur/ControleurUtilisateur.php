<?php

namespace App\Controleur;

use App\Lib\Mail;
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
            "cheminCorpsVue" => "utilisateur/vueFormulaireConnexion.php",
            "messagesFlash" => MessageFlash::lireTousMessages(),
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
            if ($utilisateur != null && MotDePasse::verifier($mdp, $utilisateur->getMotDePasse())) {
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

    public static function creerUtilisateurDepuisFormulaire(): void
    {

        if (!ConnexionUtilisateur::estAdmin()) {
            MessageFlash::ajouter("danger", "Vous devez être administrateur pour accéder à cette page");
            header("Location: ?controleur=dashboard&action=afficherDashBoard");
            exit();
        }

        $mdp = $_GET['mdp'];
        $mdp2 = $_GET['mdp2'];

        if ($mdp != $mdp2) {
            MessageFlash::ajouter("danger", "Les mots de passe ne correspondent pas");
            header("Location: ?controleur=dashboard&action=afficherDashBoard");
            exit();
        }

        $newutilisateur = ControleurUtilisateur::construireDepuisFormulaire($_GET);

        if (filter_var($newutilisateur->getMail(), FILTER_VALIDATE_EMAIL) === false) {
            MessageFlash::ajouter("danger", "Adresse mail invalide");
        }
        else if ((new UtilisateurRepository)->add($newutilisateur)) {
            MessageFlash::ajouter("success", "Utilisateur créé avec succès");

            Mail::envoyerMail($newutilisateur, "Compte CapyNote",
                "Bonjour {$newutilisateur->getNomUtilisateur()} {$newutilisateur->getPrenom()},\n\n
                L'administrateur de CapyNote vient de vous créer un compte.\n
                Vous pouvez vous connecter avec le login et le mot de passe ci-dessous :\n
                Login : {$newutilisateur->getLogin()}\n
                Mot de passe : {$mdp}\n\n
                ");

        } else {
            MessageFlash::ajouter("danger", "Impossible de créer l'utilisateur");
        }
        header("Location: ?controleur=dashboard&action=afficherDashBoard");
        exit();
    }
}