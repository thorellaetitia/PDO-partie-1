<?php
//require est = include
require 'models/modelDatabase.php';
require 'models/modelClients6.php';

//on instancie un nouvel objet clients
$queryShowsObj = new shows();
$showsArray = $queryShowsObj->displayAllShows();

?>