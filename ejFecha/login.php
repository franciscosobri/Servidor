<?php
session_start();

$userDB = ['inma' => '1234', 'juan' => 'abcd'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
    $user = trim($_POST['name'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (isset($userDB[$user]) && $userDB[$user] === $password){

        $_SESSION['name'] = $user;

        header("Location: formulario.php");
        exit;
    }
    else{

        echo '<p class="text-danger m-3">"Nombre o contraseña incorrectos."';
    }


}

?>











<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method='POST' class='m-5'>
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nombre</label> 
    <div class="col-8">
      <input id="name" name="name" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Contraseña</label> 
    <div class="col-8">
      <input id="password" name="password" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>












  </body>
</html>

