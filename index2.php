<?php
require 'controllers/controllerindex2.php';
?>

<!DOCTYPE HTML>
<htmllang = "fr">
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1" />
        <link rel = "stylesheet" href = "style.css" />
        <title>exercice_2 partie 1- PDO</title>
    </head>

    <body>
        <h1>exercice_2 partie 1 PDO php</h1>
        <p>Afficher tous les types de spectacles possibles. </p>
        <?php
        foreach ($showsList as $shows) {
            ?>
            <div>
                <h1><?= $shows->type ?></h1>
                <p><?= $shows->title ?></p>
                <p><?= $shows->date ?></p>
                <p><?= $shows->startTime ?></p>
            </div>

            <?php
        }
        ?>

    </body>
</html>


