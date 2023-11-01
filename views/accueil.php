
<?php 

session_start() ; 

$title = 'agents';


 //variable  title egale a page d accuile//
    require ('../composants/start.php') ;
    require ('../composants/header.php') ;
    require ('../composants/navigation.php') ;

    if($_SESSION['email_user']) {
      echo '<h2> bienvenue '.$_SESSION["email_user"].'  </h2>' ;
   

    }

    else{

      echo 'erreur';
      // header('Location: http://localhost/KBG%20conexion/index.php') ;

    //  exit() ;
     
    }

    
   

    



?>






</body>

</html>