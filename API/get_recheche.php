<?php

require('../database/sql.php') ;


 
if  (!empty($_POST['Search'])){

// echo 'le formulaire est remplie ';
  


$query = "SELECT * FROM missions WHERE titre LIKE :recherche";
$request= '%'. $_POST['Search'].'%';

        $RESULT = $db->prepare($query);
        $RESULT->bindParam(':recherche',$request );
        
        $RESULT->execute();

        $res= $RESULT->fetchAll();
        if (count($res)==0){
         echo ' il ya aucun resultat';
         $RESULT_cherche=false ;
        }
       else{

     $RESULT_cherche= true ;

     
       }
    
}
 
else {
    echo    '<div class="alert alert-danger" role="alert"> le formulaire est vide   </div>';
     
    
}

?>