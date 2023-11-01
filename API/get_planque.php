<?php

require('../database/sql.php') ;



// recupere les planques sur la base de données 

$get_planque = "SELECT * FROM planques ";

// enregistre les valeurs dans une variable 

$result = $db->prepare($get_planque);

$result->execute() ; 



$get_planque = "SELECT COUNT(*) AS nb_articles FROM agents ";
 
// on determine sur quel page on se trouve  

if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
  }else{
    $currentPage = 1;
  }



// On détermine le nombre total d'articles
$nbrTotal = 'SELECT COUNT(*) AS nb_articles FROM `planques`;';

// On prépare la requête
$query = $db->prepare($nbrTotal);

// On exécute
$query->execute();

// On récupère le nombre d'articles
$result = $query->fetch();

$nbArticles = (int) $result['nb_articles'];

// on determine le nomnre d article par page 

$parPage= 2 ;

// on calcule le nombre de page 

$pages = ceil($nbArticles / $parPage)  ;


// on selection deux articles 

$selectAarticle = 'SELECT * FROM `planques` LIMIT :premier, :parpage' ;

// calcule du premier article de la page 
$premier = ($currentPage * $parPage) - $parPage ; 

// on prepare la requete


$data = $db->prepare($selectAarticle);

$data->bindValue(':premier', $premier, PDO::PARAM_INT);

$data->bindValue(':parpage', $parPage, PDO::PARAM_INT);

$data->execute() ;

$rows =$data->fetchAll(PDO::FETCH_ASSOC) ;



$sql= 'SELECT * FROM `planques` ';

// on prepare la requete 

$get_planques= $db->prepare($sql) ;

// on execute la requete

$get_planques->execute() ;

// on recupere dans un tableau associative 

$getPlanques= $get_planques->fetchAll (PDO::FETCH_ASSOC) ;





 


?>

