<?php

class clients extends database { //on crée une class clients dont le parent est database donc clients héritent des attributs et methodes de database
//on définit les attributs de la table clients car ils n'existent pas dans database

    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $card;
    public $cardNumber;
     
    //on crée une fonction qui va nous permettre d'afficher les clients
    public function showAllMclients() {
        $response = $this->database->query('SELECT * FROM clients WHERE lastName LIKE "m%"');
        $donnees = $response->fetchAll(PDO::FETCH_OBJ);
        return $donnees;
    }


}

?>