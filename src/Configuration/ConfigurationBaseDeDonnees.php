<?php
namespace App\Configuration;

class ConfigurationBaseDeDonnees
{
    static private array $configurationBaseDeDonnees = array(
        'cheminBaseDeDonnees' => __DIR__ . '/../../database/database.db'
    );

    static public function getCheminBaseDeDonnees(): string
    {
        return ConfigurationBaseDeDonnees::$configurationBaseDeDonnees['cheminBaseDeDonnees'];
    }

    static public function getPDO(): \PDO
    {
        $cheminBaseDeDonnees = self::getCheminBaseDeDonnees();
        return new \PDO("sqlite:" . $cheminBaseDeDonnees);
    }
}
?>
