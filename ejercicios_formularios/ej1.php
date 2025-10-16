<?php

// Ejercicio 1
// Crea un formulario que pida al usuario su nombre (cadena) y su edad (número entero).
// • El formulario debe validar que el nombre no esté vacío y que la edad sea un número entero
// positivo mayor que 0 y menor o igual a 120.
// • Si la validación en servidor falla, se deben mostrar mensajes de error junto a los campos
// correspondientes.
// • Realiza la validación cliente en el lado del cliente.
// • El formulario se debe llamar a sí mismo, mostrando los valores previamente introducidos
// (Bienvenido “nombre” tu edad es “edad”) y el formulario vacío si no hay errores. Los
// mismos datos en el formulario si hay errores, indicando los errores




    if ($_SERVER["REQUEST_METHOD"] == "POST"){


        $nameError = "";
        $ageError = "";
        $name = $_POST['name'];
        $age = $_POST['age'];
        $error = false;

        if(!isset($name) || empty($name)){
            $nameError = "El nombre no puede estar vacío.";
            $error = true;
        }
        
        if (!isset($age) || empty($age)){
            $ageError = "La edad no puede estar vacía.";
            $error = true;
        }
        elseif(!is_numeric($age)){
            $ageError = "La edad solo puede contener números.";
            $error = true;
        }
        elseif($age <= 0 || $age > 120){
            $ageError = "La edad debe estar comprendida entre 1 y 120.";
            $error = true;
        }


        if($error == false){
            echo 'Bienvenido ' . $name . ' tu edad es ' . $age;
        }
        else{
            echo $nameError;
            echo $ageError;
        }
    }







?>

<script>




</script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form class='m-5' method='POST'>
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nombre</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Introduce tu nombre" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="age" class="col-4 col-form-label">Edad</label> 
    <div class="col-8">
      <input id="age" name="age" placeholder="Introduce tu edad" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>



