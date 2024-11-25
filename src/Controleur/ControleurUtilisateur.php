<?php

namespace App\Controleur;

use App\Lib\ConnexionUtilisateur;
use App\Lib\MessageFlash;
use App\Lib\MotDePasse;
use App\Modele\DataObject\Etudiant;
use App\Modele\DataObject\Prof;
use App\Modele\DataObject\Semestre;
use App\Modele\DataObject\Utilisateur;
use App\Modele\HTTP\Session;
use App\Modele\Repository\AdminRepository;
use App\Modele\Repository\AgregationRepository;
use App\Modele\Repository\EtudiantNoteRepository;
use App\Modele\Repository\EtudiantRepository;
use App\Modele\Repository\EtudiantSemestreRepository;
use App\Modele\Repository\FormationRepository;
use App\Modele\Repository\FormationUtilisateurRepository;
use App\Modele\Repository\NoteRepository;
use App\Modele\Repository\ProfRepository;
use App\Modele\Repository\SemestreRepository;
use App\Modele\Repository\UtilisateurRepository;

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
            /* @var $utilisateur Utilisateur */
            $utilisateur = (new UtilisateurRepository())->getParClesPrimaires([$login]);
            if ($utilisateur != null && MotDePasse::verifier($mdp, $utilisateur->getMdp())) {
                ConnexionUtilisateur::connecter($login);
                MessageFlash::ajouter("success", "Connexion réussie");
            } else {
                MessageFlash::ajouter("danger", "Login ou mot de passe incorrect");
            }
        }
        header("Location: ?controleur=utilisateur&action=afficherDashBoard");
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