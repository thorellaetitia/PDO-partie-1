<?php
//require est = include
require 'modelDatabase.php';
require 'modelClient.php';

//on instancie un nouvel objet clients
$clientsObj = new clients();
$clientsList = $clientsObj->showClients();

?>