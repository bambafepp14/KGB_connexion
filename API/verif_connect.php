



<?php

session_start();

require ('../database/sql.php') ;


  //    verification des variables email et mot de passe 

if(empty( $_POST['email']) OR empty($_POST['password'])) {
   
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    echo $hashedPassword ;

    // Pour vérifier un mot de passe ultérieurement
    









    echo ' vous devez remplir les deux champs du formulaire ';


    


}

else{
//   echo 'les identifiants on ete remplie je peux passer ala  verification   sur bdd ';

    $password = $_POST['password'];

    $hashedPassword = sha1($password);

     


    //   verifie l email existe dans la base de donne  on verifi le mot de passe 



    $connect_id = "SELECT * FROM `user` WHERE email = :email AND mdp = :mdp";

    $req = $db->prepare($connect_id);
    $req->execute([
        'email' => $_POST['email'],
        'mdp' => $hashedPassword,
    ]);

    $result = $req -> fetchAll();

  
   
  
    if($result) {

        echo 'connection reussi';
         

        $_SESSION["email_user"]= $_POST["email"] ;

        header('Location: ../views/accueil.php ');

    }



        
else{

    echo 'connection echoue FGG <br> ';
    echo '52036e5a96b401419e3b870bb3859828b111afd2</br>' ; 
    echo $hashedPassword ;
}
   

}


 ?>






