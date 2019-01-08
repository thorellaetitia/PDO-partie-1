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
    /**
     * Methode permettant d'afficher tous les clients
     * Le résultat est un tableau d'objets
     * @return array
     */
    public function showAllClients() {
        $queryResult = $this->database->query('SELECT * FROM clients');
        $allClientsData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $allClientsData;
    }


}

?>
