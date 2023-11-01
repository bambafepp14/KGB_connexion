
<?php 

$title = 'contacts';


 //variable  title egale a page d accuile//
 require ('../composants/start.php') ;
 require ('../composants/header.php') ;
 require ('../composants/navigation.php') ;
require('../API/get_contact.php');





?>
<div>
    <ul class="pagination">
        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
            <a href="./contact.php?= $currentPage - 1 ?>" class="page-link">Précédente</a>
        </li>
        <?php for($page = 1; $page <= $pages; $page++): ?>
            <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                <a href="./contact.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
            </li>
            <!-- <?php echo $page ; ?> -->

        <?php endfor ?>
            <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
            <a href="./contact.php?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
        </li>
    </ul>
</div>




<?php 
echo '<table class="table">
<thead >



      <th scope="col">ID</th>
      <th scope="col">NOM</th>
      <th scope="col">PREMON</th>
      <th scope="col">NATIONALITE</th>
      <th scope="col">DATE DE NAISSANCE</th>
      
    
    </tr>
  </thead>
  <tbody>' ;

  foreach($a as $d ){

    echo '<tr>
    <th scope="col">'.$d['id_contact'].'</th>
       <th scope="col">'.$d['nom'].'</th>
      <th scope="col">'.$d['prenom'].'</th>
       <th scope="col">'.$d['date_de_naissance'].'</th>
      <th scope="col">'.$d['nationalite'].'</th>
</tr>';
    
  }

 ?>
  </tbody>
</table>


</body>

</html>