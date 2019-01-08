<?php

class shows extends database { //on crée une class clients dont le parent est database donc clients héritent des attributs et methodes de database
//on définit les attributs de la table clients car ils n'existent pas dans database

    public $id;
    public $type;
    public $title;
    public $date;
    public $startTime;
 
    //on crée une fonction qui va nous permettre d'afficher les clients
    public function Show20clients() {
        $queryResult = $this->database->query('SELECT * FROM showTypes INNER JOIN shows WHERE showTypes.id=shows.id');
        $clientsData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $clientsData;
    }


}

?>