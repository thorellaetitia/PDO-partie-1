<?php
require 'controllers/controllerIndex6.php';
?>
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_6 partie 1- PDO</title>  
    </head>
    <body>
        <h1>exercice_6 partie 1 PDO</h1>
        <p>Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure.
            Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : 
            Spectacle par artiste, le date à heure.</p>
        
 <?php
        foreach ($showsArray as $shows) {
            ?>
            <div>
                <h1> Spectacle : <?= $shows->title ?></h1>
             <p>Artiste : <?= $shows->performer ?></p>
                <p>Date : <?= $shows->date ?></p>
                    <p>Heure : <?= $shows->startTime ?></p>
            </div>

            <?php
        }
        ?>
    </body>
</html>
