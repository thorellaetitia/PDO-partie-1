<?php
require 'controllerindex.php';
?>

<!DOCTYPE HTML>
<htmllang = "fr">
<head>
<meta charset = "utf-8" />
<meta name = "viewport" content = "width=device-width, initial-scale=1" />
<link rel = "stylesheet" href = "style.css" />
<title>exercice_1 partie 1- PDO</title>
</head>

<body>
<h1>exercice_1 partie 1 PDO php</h1>
<p>Afficher tous les clients. </p>
   <?php     
foreach ($clientsList as $clients) {
    ?>
    <div>
    <?= $clients->lastName ?>
    <?= $clients->firstName ?>   
    </div>

        <?php
    }
    ?>

</body>
</html>


