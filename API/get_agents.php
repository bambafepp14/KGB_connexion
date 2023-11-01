<?php

require('../database/sql.php') ;


$get_agents = "SELECT COUNT(*) AS nb_articles FROM agents ";
 
// on determine sur quel page on se trouve  

if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
  }else{
    $currentPage = 1;
  }



// On détermine le nombre total d'articles
$nbrTotal = 'SELECT COUNT(*) AS nb_articles FROM `agents`;';

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

$selectAarticle = 'SELECT * FROM `agents` LIMIT :premier, :parpage' ;

// calcule du premier article de la page 
$premier = ($currentPage * $parPage) - $parPage ; 

// on prepare la requete


$data = $db->prepare($selectAarticle);

$data->bindValue(':premier', $premier, PDO::PARAM_INT);

$data->bindValue(':parpage', $parPage, PDO::PARAM_INT);

$data->execute() ;

$agents =$data->fetchAll(PDO::FETCH_ASSOC) ;



$sql= 'SELECT * FROM `agents` ';

$sql1= 'SELECT nom , prenom FROM `agents` ';
// on prepare la requete 

$getAgent= $db->prepare($sql1) ;

$getAgentName= $db->prepare($sql1) ;
// on execute la requete

$getAgent->execute() ;
$getAgentName->execute() ;

// on recupere dans un tableau associative 

$articles= $getAgent->fetchAll (PDO::FETCH_ASSOC) ;
$agents_name = $getAgentName->fetchAll (PDO::FETCH_ASSOC) ;















?>