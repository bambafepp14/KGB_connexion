
<?php 

$title = 'agents';


 //variable  title egale a page d accuile//
    require ('../composants/start.php') ;
    require ('../composants/header.php') ;
    require ('../composants/navigation.php') ;

    require('../API/get_agents.php') ;

    
?>
<div>
    <ul class="pagination">
        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
            <a href="./agents.php?= $currentPage - 1 ?>" class="page-link">Précédente</a>
        </li>
        <?php for($page = 1; $page <= $pages; $page++): ?>
            <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                <a href="./agents.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
            </li>
            <!-- <?php echo $page ; ?> -->

        <?php endfor ?>
            <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
            <a href="./agents.php?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
        </li>
    </ul>
</div>




<?php 


    echo '<table class="table">
    <thead >
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOM</th>
        <th scope="col">PRENOM</th>
        <th scope="col">NATIONALITE</th>
        <th scope="col">DATE DE NAISSANCE </th>
        <th scope="col">SPECIALITE</th>
        
  
      
      </tr>
    </thead> <tbody>';

    foreach($agents as $article){

      echo '<tr>
      <th scope="row">'.$article['id_agent'].'</th>
      <td >'.$article['nom'].'</td>
      <td>'.$article['prenom'].'</td>
      <td>'.$article['nationalite'].'</td>
      <td>'.$article['date_de_naissance'].'</td>
      <td>'.$article['specialites'].'</td>
      
      
    </tr>';
      
    
         
    }

      ?>


        

  
    
   




  
    
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>ga</td>
      <td>tunisien</td>
      <td>22/05/1992</td>
      <td>tueur</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>belge</td>
      <td>05/08/1994</td>
      <td>espionnage</td>
     
      
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>usa</td>
      <td>22/011987</td>
      <td>détective</td>
      
      
    </tr> -->
  </tbody>
</table>





</body>

</html>