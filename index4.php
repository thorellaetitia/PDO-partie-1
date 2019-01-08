<?php
require 'controllers/controllerindex4.php';
?>

<!DOCTYPE HTML>
<htmllang = "fr">
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1" />
        <link rel = "stylesheet" href = "style.css" />
        <title>exercice_4 partie 1- PDO</title>
    </head>

    <body>
        <h1>exercice_4 partie 1 PDO php</h1>
        <p>N'afficher que les clients possédant une carte de fidélité.</p>
        <?php
        foreach ($clientsList as $clients) {
            ?>
            <div>
                <h1><?= $clients->id ?></h1>
                <p><?= $clients->lastName ?></p>
                <p><?= $clients->firstName ?></p>
                 <p><?= $clients->cardNumber ?></p>
            </div>

            <?php
        }
        ?>

    </body>
</html>

