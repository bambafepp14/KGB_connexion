<?php

require('../database/sql.php') ;


$get_contact = "SELECT * FROM contacts ";



$rep = $db ->query($get_contact) ;









$get_contact = "SELECT COUNT(*) AS nb_articles FROM contacts ";
 
// on determine sur quel page on se trouve  

if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
  }else{
    $currentPage = 1;
  }



// On détermine le nombre total d'articles
$nbrTotal = 'SELECT COUNT(*) AS nb_articles FROM `contacts`;';

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

$selectAarticle = 'SELECT * FROM `contacts` LIMIT :premier, :parpage' ;

// calcule du premier article de la page 
$premier = ($currentPage * $parPage) - $parPage ; 

// on prepare la requete


$data = $db->prepare($selectAarticle);

$data->bindValue(':premier', $premier, PDO::PARAM_INT);

$data->bindValue(':parpage', $parPage, PDO::PARAM_INT);

$data->execute() ;

$a =$data->fetchAll(PDO::FETCH_ASSOC) ;



$sqlGetContact = 'SELECT * FROM `contacts` ';

// on prepare la requete 

$getContact = $db->prepare($sqlGetContact) ;

// on execute la requete
$getContact->execute() ;

// on recupere dans un tableau associative 


$contact_name = $getContact->fetchAll (PDO::FETCH_ASSOC) ;














?>
