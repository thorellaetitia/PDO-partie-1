<?php

class shows extends database { //on crée une class clients dont le parent est database donc clients héritent des attributs et methodes de database
//on définit les attributs de la table clients car ils n'existent pas dans database

    public $id;
    public $title;
    public $performer;
    public $date;
    public $duration;
    public $startTime;
     
    //on crée une fonction qui va nous permettre d'afficher les clients
    public function displayAllShows() {
        $response = $this->database->query('SELECT * FROM shows ORDER BY title');
        $donnees = $response->fetchAll(PDO::FETCH_OBJ);
        return $donnees;
    }


}

?>