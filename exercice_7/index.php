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

$reponse = $bdd->query('SELECT lastName, firstName, birthDate, card, cardNumber, CASE card WHEN 1 THEN "oui" WHEN 0 THEN "non" END AS carte FROM `clients`');


// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch()) {
    ?>
    <p>
       Nom : <?= $donnees['lastName']; ?><br/>
        Prénom : <?= $donnees['firstName']; ?><br/>
        Date de naissance : <?= $donnees['birthDate']; ?><br/>
        Carte de fidélité : <?= $donnees['carte']; ?><br/>
         Numéro de carte : <?= $donnees['cardNumber']; ?><br/>
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
        <title>exercice_7 partie 1- PDO</title>  
    </head>
    <body>
        <h1>exercice_7 partie 1 PDO</h1>
        <p>Afficher tous les clients comme ceci :

        Nom : Nom de famille du client

        Prénom : Prénom du client

        Date de naissance : Date de naissance du client

        Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)

        Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.</p> 

    </body>
</html>
