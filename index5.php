<?php
require 'controllers/controllerIndex5.php';
?>

<!DOCTYPE HTML>
<htmllang = "fr">
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1" />
        <link rel = "stylesheet" href = "style.css" />
        <title>exercice_5 partie 1- PDO</title>
    </head>

    <body>
        <h1>exercice_5 partie 1 PDO php</h1>
        <p>Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Les afficher comme ceci :

            Nom : Nom du client

            Prénom : Prénom du client

            Trier les noms par ordre alphabétique.</p>
        <?php
        foreach ($clientsList as $clients) {
            ?>
            <div>
                <h1><?= $clients->id ?></h1>
             <p>Nom : <?= $clients->lastName ?></p>
                <p>Prénom : <?= $clients->firstName ?></p>
                
            </div>

            <?php
        }
        ?>

    </body>
</html>

