<?php
namespace App\Configuration;

class ConfigurationBaseDeDonneesSqlite extends ConfigurationBaseDeDonnees
{
    static private array $configurationBaseDeDonnees = array(
        'cheminBaseDeDonnees' => __DIR__ . '/../../database/database.db'
    );

    static public function getCheminBaseDeDonnees(): string
    {
        return ConfigurationBaseDeDonneesSqlite::$configurationBaseDeDonnees['cheminBaseDeDonnees'];
    }

    public function getDataSourceName(): string
    {
        return "sqlite:" . ConfigurationBaseDeDonneesSqlite::getCheminBaseDeDonnees();
    }
}
?>
