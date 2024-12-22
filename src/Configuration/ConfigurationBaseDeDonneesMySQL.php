<?php
namespace App\Configuration;

use PDO;

class ConfigurationBaseDeDonneesMySQL extends ConfigurationBaseDeDonnees
{
    public function getLogin(): ?string
    {
        return "your login";
    }
    public function getMotDePasse(): ?string
    {
        return "your password";
    }
    public function getOption(): array
    {
        return array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
    }
    public function getDataSourceName(): string
    {
        $host = "localhost";
        $port = "3306";
        $nomBaseDeDonnees = "your database name";
        return "mysql:host=$host;port=$port;dbname=$nomBaseDeDonnees";
    }
}
?>
