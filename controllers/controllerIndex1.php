<?php
//require est = include
require 'models/modelDatabase.php';
require 'models/modelClient.php';

//on instancie un nouvel objet clients
$clientsObj = new clients() ;
$clientsArray = $clientsObj->showAllClients();

?>