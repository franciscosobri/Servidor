<?php

// Ejercicio 2
// Diseña un formulario donde el usuario elija:
// • Su color favorito (select con opciones: Rojo, Verde, Azul, Amarillo).
// • Su género (radio buttons: Hombre, Mujer, Otro).
// • Validar que el usuario haya seleccionado alguna opción para ambos campos (no puede
// enviarse vacío).
// • En caso de error, mostrar mensajes junto a cada campo.
// • Al enviarse correctamente, mostrar un resumen con las opciones elegidas.
// • El formulario debe autollamarse mostrando los valores previos si hay error.

function isValid(){
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $select = $_POST['selectColor'];
        $radio = $_POST['radio'];
        $selectError = "";
        $radioError = "";
        $error = false;

        if(!isset($select) || empty($select)){
            $select = "Debes seleccionar una opción."
        }

        if(!isset($radio) || empty($radio)){
            $select = "Debes marcar una opción."
        }

        if($error){
            echo $selectError;
            echo $radioError;
        }
        else{
            echo "Color favorito: " . $select . "Género: " . $radio;
        }
    }
}

?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method= 'POST' class='m-5'>
  <div class="form-group row">
    <label for="selectColor" class="col-4 col-form-label">Color</label> 
    <div class="col-8">
      <select id="selectColor" name="selectColor" class="custom-select">
        <option value="">Seleccione</option>
        <option value="blue">Azul</option>
        <option value="pink">Macarrones</option>
        <option value="red">Rojo</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Género</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="man"> 
        <label for="radio_0" class="custom-control-label">Hombre</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="woman"> 
        <label for="radio_1" class="custom-control-label">Mujer</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="other"> 
        <label for="radio_2" class="custom-control-label">Helicoptero de Apache</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>