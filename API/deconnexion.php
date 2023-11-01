<?php
// Démarrez la session
    session_start();



    if(session_destroy()){
   
?>
     
        <script type= " text/javascript">   
            alert('deconnexion reussie');
            window.location.assign('../index.php');
        </script>
<?php
  
  

    }

    




?>
