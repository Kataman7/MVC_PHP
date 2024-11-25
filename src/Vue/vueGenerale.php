<?php
/** @var string $titre */

/** @var string $cheminCorpsVue */

use App\Lib\ConnexionUtilisateur;
use App\Lib\MessageFlash;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($titre); ?></title>
    <link rel="stylesheet" href="../ressources/style.css">
</head>
<body>

<header>
    <h1>Header</h1>
</header>
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
