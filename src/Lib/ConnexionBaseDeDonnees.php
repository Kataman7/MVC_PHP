<?php

namespace App\Lib;
use App\Configuration\ConfigurationBaseDeDonnees;
use App\Configuration\ConfigurationBaseDeDonneesSqlite;
use PDO;

class ConnexionBaseDeDonnees
{
    private static ?ConnexionBaseDeDonnees $instance = null;
    private PDO $pdo;
    private ConfigurationBaseDeDonnees $config;

    public static function getPdo(): PDO
    {
        return ConnexionBaseDeDonnees::getInstance()->pdo;
    }

    private function __construct()
    {
        $this->config = new ConfigurationBaseDeDonneesSqlite();
        $dsn = $this->config->getDataSourceName();
        $login = $this->config->getLogin();
        $motDePasse = $this->config->getMotDePasse();
        $options = $this->config->getOption();

        $this->pdo = new PDO($dsn, $login, $motDePasse, $options);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // getInstance s'assure que le constructeur ne sera
    // appelé qu'une seule fois.
    // L'unique instance crée est stockée dans l'attribut $instance
    private static function getInstance(): ConnexionBaseDeDonnees
    {
        // L'attribut statique $instance s'obtient avec la syntaxe ConnexionBaseDeDonnees::$instance
        if (is_null(ConnexionBaseDeDonnees::$instance))
            // Appel du constructeur
            ConnexionBaseDeDonnees::$instance = new ConnexionBaseDeDonnees();
        return ConnexionBaseDeDonnees::$instance;
    }
}
