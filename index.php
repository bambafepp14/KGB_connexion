<?php 
session_start();

$title = 'page d accuiel';


 //variable  title egale a page d accuile//
    require ('composants/start.php') ;
    require ('composants/header.php') ;

    // verification de connexion du membre 
    if( isset ($_SESSION['email_user'])){
        header('Location:./views/accueil.php');

    }

    else{
        
        require ('composants/formulaire.php') ;
    }
    




?>

</body>

</html>






