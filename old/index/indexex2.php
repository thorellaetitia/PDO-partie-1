<?php // try {
//    // On se connecte à MySQL
//    $bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'fiadone', 'fiadone');
//} catch (Exception $e) {
//    // En cas d'erreur, on affiche un message et on arrête tout
//    die('Erreur : ' . $e->getMessage());
//}

// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table clients

//$reponse = $bdd->query('SELECT * FROM showTypes INNER JOIN shows WHERE showTypes.id=shows.id');

// On affiche chaque entrée une à une

//while ($donnees = $reponse->fetch()) {
    ?>
    <p>
    <?=//$donnees['type']; ?>
    <?=// $donnees['title']; ?>
    <?=// $donnees['date']; ?>
    <?= //$donnees['startTime']; ?>
   </p>
    //<?php
//}
//
////Termine le traitement de la requête-->
//$reponse->closeCursor();
//?>
<!--
<!DOCTYPE HTML>
<htmllang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link rel="stylesheet" href="style.css" />
        <title>exercice_2 partie 1- PDO</title>  
    </head>
    <body>
        <h1>exercice_2 partie 1 PDO</h1>
        <p>Afficher tous les types de spectacles possibles. </p> 

    </body>
</html>-->


