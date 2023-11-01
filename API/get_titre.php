<?php

require('../database/sql.php') ;


$get_titre= "SELECT titre FROM missions ";







// enregistre les valeurs dans une variable 

$reps = $db->prepare($get_titre);

$reps->execute() ; 

$datas= $reps->fetchAll() ; 




$strings=count($datas) ; 



