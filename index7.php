<?php
require 'controllers/controllerIndex7.php';
?>

<!DOCTYPE HTML>
<html lang = "fr">
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1" />
        <link rel = "stylesheet" href = "style.css" />
        <title>exercice_7 partie 1- PDO</title>
    </head>
    <body>
        <h1>exercice_ 7 partie 1 PDO</h1>
        <p>Afficher tous les clients comme ceci :

            Nom : Nom de famille du client

            Prénom : Prénom du client

            Date de naissance : Date de naissance du client

            Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)

            Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.
        </p> 
        <?php
        foreach ($allclientsarray as $shows) {
            ?>
            <div>
                <h1> Nom : <?= $shows->lastName ?></h1>
                <p>Prénom : <?= $shows->firstName ?></p>
                <p>Date de naissance : <?= $shows->birthDate ?></p>
                <p>Carte de fidélité: <?= $shows->etat ?></p>
                <p>Numéro de carte: <?= $shows->cardNumber ?></p>
            </div>

            <?php
        }
        ?>


    </body>
</html>
