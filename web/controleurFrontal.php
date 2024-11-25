<?php
    require_once __DIR__ . '/../src/Lib/Psr4AutoloaderClass.php';

    $chargeurDeClasse = new App\Covoiturage\Lib\Psr4AutoloaderClass(false);
    $chargeurDeClasse->register();
    $chargeurDeClasse->addNamespace('App\\', __DIR__ . '/../src');

    $controleur = 'utilisateur';
    if (isset($_REQUEST['controleur']))
    {
        $controleur = $_REQUEST['controleur'];
    }

    $namecontroleurClass = 'App\Controleur\Controleur' . ucfirst($controleur);

    if (class_exists($namecontroleurClass))
    {
        $action = 'afficherDashBoard';
        if (isset($_REQUEST['action']))
        {
            $action = $_REQUEST['action'];
        }
        if (in_array($action, get_class_methods($namecontroleurClass)))
        {
            $namecontroleurClass::$action();
        } else
        {
            echo "Cette action est introuvable";
        }
    }
    else
    {
        echo "Ce controleur est introuvable";
    }
