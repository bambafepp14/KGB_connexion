
<?php 

$title = 'missions';


 //variable  title egale a page d accuile//
 require ('../composants/start.php') ;
 require ('../composants/header.php') ;
 require ('../composants/navigation.php') ;
require('../API/get_planque.php') ;
require('../API/get_titre.php') ;
require('../API/get_agents.php') ;
require('../API/get_contact.php');
require('../API/get_pays.php');
require('../API/get_specialite.php');
require('../API/get_missions.php');
require('../API/get_recheche.php')
?>


    


<div class="container">
 <table class="table mb-4">
<thead>
    <tr>
        <th scope="col">description</th>
        <th scope="col">planques</th>
        <th scope="col">titre</th>
        <th scope="col">cibles</th>
        <th scope="col">specialites </th>
    </tr>
</thead> <tbody>
<?php 


  // Vérifie si la variable de recherche existe
  if (!empty ($_POST['Search'])) {
    
    
    if($RESULT_cherche==true ){
        foreach ($res as $line) {

            echo  '<tr>
                        <td>'.$line['descript'].'</td>
                        <td>'.$line['planques'].'</td>
                        <td>'.$line['titre'].'</td>
                        <td>'.$line['cibles'].'</td>
                        <td>'.$line['specialite'].'</td>
                </tr>'; 
            
        } 
    }
   else {
  
    // fonction location redirection  vers missionsphp
     ?>
    <script language="javascript" type="text/javascript">
       window.location="./missions.php";
</script>
     <?php
   }
  }
    
  else {

    foreach ($missionss as $value){

                echo '<tr>
                
                <td>'.$value['descript'].'</td>
                <td>'.$value['planques'].'</td>
                <td>'.$value['titre'].'</td>
                <td>'.$value['cibles'].'</td>
                <td>'.$value['specialite'].'</td>
                
                 
              </tr>';
                 }         
        
        
   
}





?>
            

            </tbody>


 </table>

 









    <h2>Formulaire de Mission</h2>
    <form method="post" action="../API/missions_connect.php">
        <div class="form-group  ">
            <label for="titre">Titre :</label>
            <input type="text" class="form-control col-md-4 mb-3" id="titre" name="titre">
    

        </div>



        <div class="form-group">
            <label for="agents">agents :</label>
            <select class="form-control col-md-4 mb-3" id="agents" name="agents">
            <?php 


                foreach ($agents_name as $valeur) {

                  echo '<option value='.$valeur['nom'].'>'.$valeur['nom'].' '.$valeur['prenom'].'</option>' ;
                }
                   
               ?>
            </select>
        </div>

        <div class="form-group">
            <label for="pays">Pays :</label>
            <select class="form-control col-md-4 mb-3" id="pays" name="pays">
            <?php 

           
                foreach ($pays as $valePpays) {

                  echo '<option value='.$valePpays['nom_fr_fr'].'> '.$valePpays['nom_fr_fr'].' </option>' ;
                }
                   
               ?> 
            </select>
      
        </div>

        <div class="form-group">
            <label for="contact">contacts :</label>
            
            <select class="form-control col-md-4 mb-3" id="contacts" name="contacts">
            <?php 

           
                foreach ($contact_name as $vale) {

                  echo '<option value='.$vale['nom'].'> '.$vale['nom'].' '.$vale['prenom'].'</option>' ;
                }
                   
               ?> 
            </select>
      
      



         
        </div>

        <div class="form-group">
            <label for="descript">Description :</label>
            <textarea class="form-control col-md-4 mb-3" id="descript" name="descript" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="statut">Statut :</label>
            <select class="form-control col-md-4 mb-3" id="statut" name="statut">
                <option value="en_cours">En cours</option>
                <option value="terminee">Terminée</option>
                <option value="annulee">Annulée</option>
            </select>
        </div>

        <div class="form-group">
            <label for="planques">Planques :</label>
            <select class="form-control col-md-4 mb-3" id="planques" name="planques">
                <?php 
                
                foreach ($getPlanques as $val) {

                    echo '<option value='.$val['type'].'> '.$val['type'].'</option>' ;
                  }
                     
               ?>
            </select>
            
        </div>
        <div class="form-group">
            <label for="specialite"> specialite :</label>

            <select class="form-control col-md-4 mb-3" id="specialite" name="specialite">
            <?php 

           
                foreach ($specialite as $valSpe) {

                  echo '<option value='.$valSpe['nom'].'> '.$valSpe['nom'].' </option>' ;
                }
                   
               ?> 
            </select>
           
        </div>

        <div class="form-group">
            <label for="date_debut">Date de début :</label>
            <input type="date" class="form-control col-md-4 mb-3" id="date_debut" name="date_debut">
        </div>

        <div class="form-group">
            <label for="date_fin">Date de fin :</label>
            <input type="date" class="form-control col-md-4 mb-3" id="date_fin" name="date_fin">
        </div>

        <button type="submit" class="btn btn-primary ">Envoyer</button>
    </form>
</div>

</body>
</html>

</body>

</html>