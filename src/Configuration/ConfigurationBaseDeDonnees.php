<?php

namespace App\Configuration;

abstract class ConfigurationBaseDeDonnees
{
    public abstract function getDataSourceName(): string;
    public function getLogin(): ?string
    {
        return null;
    }
    public function getMotDePasse(): ?string
    {
        return null;
    }

    public function getOption()
    {
        return null;
    }
}