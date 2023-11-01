<?php 


require ('database/sql.php') ;

// recuperation des valeures du formulaire

   $email= $_POST['email'] ;
   $mot_de_passe= $_POST['password'] ;


  


//    verification des variables email et mot de passe 

if(empty( $_POST['email']) OR empty($_POST['password'])) {
    echo ' vous devez remplir les deux champs du formulaire ';


    


}

else{
//   echo 'les identifiants on ete remplie je peux passer ala  verification   sur bdd ';


    //   verifie l email existe dans la base de donne  on verifi le mot de passe 

    


    $bdd = "SELECT mdp  , email FROM user WHERE email = '$email'";
    $reponse = $db->prepare($bdd);
    $reponse ->execute() ;
    $data= $reponse->fetchAll(PDO::FETCH_ASSOC);
    $keys= array_keys($data);

    for($i=0 ; $i<count($data); $i ++ ){
        echo $keys;
    }

    echo '<pre>' ;
    print_r($data);
    echo '</pre>' ;

   

    // foreach($data as $result){



        
    
    // //   if($result['email'] == true){
    // //     echo ' l email exite dans la base de donne ';
    // // //     verification du mot de passe 
    // //   }
    // //    elseif($result['email']== false) {
    // //     echo ' l email exite pas  dans la base de donne'; 
    // //  }

    // //  else{
    // //     echo ' erreur server';
    // //  }
      
    // }
}   

//    while ($data=$requete ->fetch()) {
//     echo $data['email'] ;

//    }





   



  



//    header('<Location:views/agents.php') ;

//    exit();








?>

</body>

</html>






