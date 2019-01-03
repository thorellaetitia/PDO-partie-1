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

$reponse = $bdd->query('SELECT * FROM clients WHERE lastName LIKE "m%" ORDER BY lastName');

// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch()) {
    ?>
    <p>
    <?= $donnees['lastName']; ?><br/>
    <?= $donnees['firstName']; ?><br/>
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
        <title>exercice_5 partie 1- PDO</title>  
    </head>
    <body>
        <h1>exercice_5 partie 1 PDO</h1>
        <p>Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Les afficher comme ceci :

        Nom : Nom du client

        Prénom : Prénom du client

        Trier les noms par ordre alphabétique.</p> 

    </body>
</html>
