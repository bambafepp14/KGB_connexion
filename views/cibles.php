
<?php 

$title = 'cibles';


 //variable  title egale a page d accuile//
 require ('../composants/start.php') ;
 require ('../composants/header.php') ;
 require ('../composants/navigation.php') ;
 require('../API/get_cibles.php') ;

 ?>
 <div>
     <ul class="pagination">
         <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
         <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
             <a href="./cibles.php?= $currentPage - 1 ?>" class="page-link">Précédente</a>
         </li>
         <?php for($page = 1; $page <= $pages; $page++): ?>
             <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
             <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                 <a href="./cibles.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
             </li>
             <!-- <?php echo $page ; ?> -->
 
         <?php endfor ?>
             <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
             <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
             <a href="./cibles.php?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
         </li>
     </ul>
 </div>
 
 
 
 
 <?php 
 
 echo '<table class="table">
    <thead >

    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOM</th>
      <th scope="col">PREMON</th>
      <th scope="col">NATIONALITE</th>
      <th scope="col">DATE DE NAISSANCE</th>
      
    
    </tr>
  </thead>
  <tbody> ';

  // while($d =$rep ->fetch() ){
    foreach($d as $art){
    echo '<tr>
    <th scope="col">'.$art['id_cibles'].'</th>
       <th scope="col">'.$art['nom'].'</th>
      <th scope="col">'.$art['prenom'].'</th>
       <th scope="col">'.$art['date_de_naissance'].'</th>
      <th scope="col">'.$art['nationalite'].'</th>
</tr>';
    
  }

 
?>
<!-- // <table class="table">
// <tr>
//       <th scope="col">ID</th>
//       <th scope="col">NOM</th>
//       <th scope="col">PREMON</th>
//       <th scope="col">NATIONALITE</th>
//       <th scope="col">DATE DE NAISSANCE</th>
      
    
//     </tr>
//   </thead>
//   <tbody>
//     <tr>
//       <th scope="row">1</th>
//       <td>maria</td>
//       <td>beton</td>
//       <td>italienne</td>
//       <td>28/02/1981</td>
      
//     </tr>
//     <tr>
//       <th scope="row">2</th>
//       <td>jean luiz</td>
//       <td>nelson</td>
//       <td>turque</td>
//       <td>20/12/1993</td>
      
//     </tr>
//     <tr>
//       <th scope="row">3</th>
//       <td>rudy</td>
//       <td>top</td>
//       <td>marocain</td>
//       <td>08/02/1990</td>
     
//     </tr>
//     <tr>
//       <th scope="row">1</th>
//       <td>henri</td>
//       <td>claude</td>
//       <td>chinois</td>
//       <td>12/06/1987</td>
       -->
   </tr>
  </tbody>
</table>

</body>




</html>