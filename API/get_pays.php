<?php

require('../database/sql.php') ;



// recupere les pays sur la base de données 

$get_pays = "SELECT * FROM pays";

// enregistre les valeurs dans une variable 

$resultaPays = $db->prepare($get_pays);

$resultaPays->execute() ; 


$pays = $resultaPays->fetchAll (PDO::FETCH_ASSOC) ;



?>

