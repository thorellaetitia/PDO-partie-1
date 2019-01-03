<?php
try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=colyseum', 'fiadone', 'fiadone');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table clients

$reponse = $bdd->query('SELECT * FROM shows ORDER BY title');

// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch()) {
    ?>
    <p>
        Spectacle : <?= $donnees['title']; ?><br/>
        par <?= $donnees['performer']; ?><br/>
        le <?= $donnees['date']; ?><br/>
        à <?= $donnees['startTime']; ?><br/>
    </p>
    <?php
}

//Termine le traitement de la requête-->
$reponse->closeCursor();
?>

<!DOCTYPE HTML>
<htmllang="fr">
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

    </body>
</html>
