<?php
session_start();

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Añadir Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Añadir Tareas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Lista de Tareas</a>
        </li>
        
        
      </ul>
     
    </div>
  </div>
</nav>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method='POST' class= 'm-5'>
  <div class="form-group row">
    <label for="numberUser" class="col-4 col-form-label">Numero de Usuarios</label> 
    <div class="col-8">
      <input id="numberUser" name="numberUser" type="number" min=2 max=10 class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>