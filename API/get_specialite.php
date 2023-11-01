<?php

require('../database/sql.php') ;



// recupere les pays sur la base de données 

$get_specialite = "SELECT * FROM specialite";

// enregistre les valeurs dans une variable 

$resultaSpecialite = $db->prepare($get_specialite);

$resultaSpecialite->execute() ; 


$specialite = $resultaSpecialite->fetchAll (PDO::FETCH_ASSOC) ;



?>

