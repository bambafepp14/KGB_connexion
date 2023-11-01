
<?php 

$title = 'planques';


 //variable  title egale a page d accuile//
 require ('../composants/start.php') ;
 require ('../composants/header.php') ;
 require ('../composants/navigation.php') ;
require('../API/get_planque.php') ;
?>
<div>
    <ul class="pagination">
        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
            <a href="./planques.php?= $currentPage - 1 ?>" class="page-link">Précédente</a>
        </li>
        <?php for($page = 1; $page <= $pages; $page++): ?>
            <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                <a href="./planques.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
            </li>
            <!-- <?php echo $page ; ?> -->

        <?php endfor ?>
            <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
            <a href="./planques.php?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
        </li>
    </ul>
</div>




<?php 


 echo '<table class="table">
<thead >

<th scope="col">ID</th>
      <th scope="col">ADRESSE</th>
      <th scope="col">PAYS</th>
      <th scope="col">TYPE</th>
     
      
    
    </tr>
  </thead>
  <tbody>' ;
  //  $rows=  $result->fetchAll(PDO::FETCH_ASSOC);
     foreach($rows as $row){
    
    echo '<tr>
    <th scope="col">'.$row['id_planque'].'</th>
    <th scope="col">'.$row['adresse'].'</th>
    <th scope="col">'.$row['pays'].'</th>
    <th scope="col">'.$row['type'].'</th>
   
    
  
  </tr>' ;

   }


?>

  </tbody>
</table>

</body>


</html>