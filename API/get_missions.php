<?php

require('../database/sql.php') ;



// recupere les pays sur la base de données 

$get_missions = "SELECT * FROM missions";

// enregistre les valeurs dans une variable 

$resultaMissions = $db->prepare($get_missions);

$resultaMissions->execute() ; 


$missionss = $resultaMissions->fetchAll (PDO::FETCH_ASSOC) ;



?>

