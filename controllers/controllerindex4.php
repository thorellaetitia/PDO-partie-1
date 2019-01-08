<?php
//require est = include
require 'models/modelDatabase.php';
require 'models/modelClients4.php';

//on instancie un nouvel objet clients
$clientsObj = new clients();
$clientsList = $clientsObj->showfirstclients();

?>