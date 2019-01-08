<?php

class database { //on crée une class database

    public $database;    //attribut database

    public function __construct() { //utilisation méthode magique construct
        //connexion à la base
        try {
            $this->database = new PDO('mysql:host=localhost;dbname=colyseum', 'fiadone', 'fiadone');
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function __destruct() {  //utilisation méthode magique destruct
        $this->database = NULL;
    }

}
