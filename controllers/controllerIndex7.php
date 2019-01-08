<?php
//require est = include
require 'models/modelDatabase.php';
require 'models/modelClients7.php';

//on instancie un nouvel objet clients
$queryClientsObj = new clients();
$allclientsarray = $queryClientsObj->displayAllClients();

?>