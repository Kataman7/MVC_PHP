<?php
namespace App\Configuration;
use PDO;

class ConfigurationBaseDeDonneesMySQL extends ConfigurationBaseDeDonnees
{
    private string $nomHote = 'webinfo.iutmontp.univ-montp2.fr';
    private string $nomBaseDeDonnees = 'SAE3A_Q5D';
    private string $port = '3316';
    private ?string $login = '';
    private ?string $motDePasse = '';

    public function getDataSourceName(): string
    {
        return "mysql:host={$this->nomHote};port={$this->port};dbname={$this->nomBaseDeDonnees}";
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function getOption()
    {
        return array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    }

}

?>
