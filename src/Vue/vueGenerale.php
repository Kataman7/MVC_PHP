<?php

/** @var string $titre */
/** @var string $cheminCorpsVue */
/** @var array $messagesFlash */

use App\Lib\MessageFlash;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($titre); ?></title>
    <link rel="stylesheet" href="../ressources/style.css">
</head>

<body>
    <header>
        <h1>Header</h1>
    </header>
    <div>
        <?php
        if (isset($messagesFlash)) {
            foreach ($messagesFlash as $type => $messagesFlashPourUnType) {
                // $type est l'une des valeurs suivantes : "success", "info", "warning", "danger"
                // $messagesFlashPourUnType est la liste des messages flash d'un type
                foreach ($messagesFlashPourUnType as $messageFlash) {
                    echo "<div class=\"alert alert-$type\"> <p> $messageFlash </p> </div>";
                }
            }
        }
        ?>
    </div>
    <main>
        <div class="content">
            <?php
            require __DIR__ . "/{$cheminCorpsVue}";
            ?>
        </div>
    </main>
    <footer>
        <p>Footer - 2024</p>
    </footer>
</body>
</html>