<?php



?>


<div class="btn-group  p-2   m-2" role="group" aria-label="Basic example">
  
<a href="/KBG%20Conexion/views/agents.php?page=1"><button type="button" class="btn btn-success  m-2"> AGENTS</button></a>


  
  <a href="/KBG%20Conexion/views/missions.php"><button type="button" class="btn btn-success   m-2"> MISSIONS</button></a>

  <a href="/KBG%20Conexion/views/cibles.php"><button type="button" class="btn btn-success  m-2"> CIBLES</button></a>

  <a href="/KBG%20Conexion/views/contact.php"><button type="button" class="btn btn-success m-2"> CONTACTS</button></a>

  <a href="/KBG%20Conexion/views/planques.php"><button type="button" class="btn btn-success m-2"> PLANQUES</button></a>

</div>


<!-- <div class="dropdown m-4">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div> -->


<div class="container  p-5">
  <div class="row   w-100">
    <div class="col-md-6 justify-content-center ">
      <div class="form-group   ">
      <div class="d-flex align-items-center">
        <select class="form-control  " id="filter">
          <option value ="default">filter par </option>
          <option value ="option1">Option 1</option>
          <option value="option2">Option 2</option>
          <option value="option3">Option 3</option>
        </select>
        </div>
      </div>
    </div>
    <div class="col-md-6 justify-content-center">
      <button type="button" class="btn btn-primary">Appliquer le filtre</button>
    </div>
  </div>
</div>



  <div class="navbar navbar-light bg-light justify-content-end m-3">
  <!-- <a class="navbar-brand">Navbar</a> -->
  <form class="form-inline" method="POST" action="../views/missions.php">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  </div>


