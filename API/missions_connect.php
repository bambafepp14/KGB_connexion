



<?php

session_start();

require ('../database/sql.php') ;


 // Vérification si le formulaire a été soumis
if (!isset($_POST['submit'])) {

   

    
    // Vérification de chaque champ avec isset()
    $i= 0; 
      
    $array_error_list= array();
    
     
        if(isset($_POST['titre']) && empty($_POST['titre'])){
            $i++;
            $titre_erreur= 'le titre n a pas ete remplie ' ;

            array_push($array_error_list , $titre_erreur );
        }
    
       
        if(isset($_POST['agents'])&& empty($_POST['agents'])){
            $i++;
            $agent_erreur= 'le agent a pas ete remplie ' ;
           
            array_push($array_error_list , $agent_erreur );
        }
         


     
        if(isset($_POST['pays'])&& empty($_POST['pays'])){
            $i++;
            $pays_erreur= 'le pays  n a pas ete remplie ' ;

            array_push($array_error_list , $pays_erreur );
        }
             
        
    
            
        if(isset($_POST['contact'])&& empty($_POST['contact'])){
                $i++;
                $contact_erreur= 'le contact n a pas ete remplie '  ;

                array_push($array_error_list , $contact_erreur );
        }
               
            
        
       
        if(isset($_POST['descript'])&& empty($_POST['descript'])){
            $i++;
                $description_erreur= 'le  description n a pas ete remplie '  ;
                 
                array_push($array_error_list , $description_erreur );
        }
        
       if (strlen($_POST['descript']) > 100){

        

        $i++;
                $description2_erreur= 'le  nombre de caractere est limité a 100 '  ;
                 
                array_push($array_error_list , $description2_erreur );
       } 
       
                
        

        if(isset($_POST['statut'])&& empty($_POST['statut'])){
            $i++;
            $statut_erreur= 'le statue n a pas ete remplie '  ;

            array_push($array_error_list , $statut_erreur );
        }

               

        if(isset($_POST['planque'])&& empty($_POST['planque'])){
            $i++;
            $planque_erreur= 'le planque n a pas ete remplie '  ;

            array_push($array_error_list , $planque_erreur );
        
        }   

                

        if(isset($_POST['specialite'])&& empty($_POST['specialite'])){
             $i++;
            $specialite_erreur= 'le sepecialite n a pas ete remplie '  ;

            array_push($array_error_list , $specialite_erreur );
        

        }   

                

        if(isset($_POST['date_debut'])&& empty($_POST['date_fin'])){
            $i++;
            $date_debut_erreur= 'la date_debut n a pas ete remplie '  ;

            array_push($array_error_list , $date_debut_erreur );
        }
                

          
        if(isset($_POST['date_fin'])&& empty($_POST['date_fin'])){
            $i++;
            $date_fin_erreur= 'la date_fin n a pas ete remplie '  ;

            array_push($array_error_list , $date_fin_erreur );     

        } 
        
        if ($i > 0) {
            // Affichez les erreurs
            foreach ($array_error_list as $error) {
                echo $error . "<br>";
            }
           
            echo " <p> Il y a eu $i erreur(s) dans le formulaire .  </p>  ";

            echo '<p>Une erreur s\'est produite. Veuillez cliquer sur le lien ci-dessous pour revenir à la page : </p><br><br>';
            echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">Retour</a>';

            // echo   $_POST['planque']  ;

        } else {
        
 
            // Insérer les données dans la base de données
             

            
            $bd_missions = "INSERT INTO missions ( titre, agents, pays, contacts, descript, statut, planques, specialite, date_debut, date_fin)
             VALUES ( :titre, :agents, :pays, :contacts, :descript, :statut, :planque, :specialite, :date_debut, :date_fin)";

            $reponse = $db->prepare($bd_missions);

            $reponse -> bindParam(':titre',$_POST['titre'],PDO::PARAM_STR ) ;

            $reponse -> bindParam(':agents',$_POST['agents'],PDO::PARAM_STR) ;

            $reponse -> bindParam(':pays',$_POST['pays'],PDO::PARAM_STR ) ;

            $reponse -> bindParam(':contacts',$_POST['contacts'],PDO::PARAM_STR) ;

            $reponse -> bindParam(':descript',$_POST['descript'],PDO::PARAM_STR ) ;

            $reponse -> bindParam(':statut',$_POST['statut'],PDO::PARAM_STR) ;

            $reponse -> bindParam(':planque',$_POST['planques'],PDO::PARAM_STR ) ;

            $reponse -> bindParam(':specialite',$_POST['specialite'],PDO::PARAM_STR) ;

            $reponse -> bindParam(':date_debut',$_POST['date_debut'],PDO::PARAM_STR ) ;

            $reponse -> bindParam(':date_fin',$_POST['date_fin'],PDO::PARAM_STR ) ;
            


            $reponse->execute() ;




            
            






            

            echo "Le formulaire a été bien rempli. Les données ont été insérées dans la base de données.";
        }



    
}   
    
   
    
    else{
        echo 'formulaire no renvoyer';
    }


   
   
    

      
     

      
      
      
       
       




 ?> 








