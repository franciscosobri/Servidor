<?php


// 20.- Dado el siguiente array asociativo que contiene información de varios
// alumnos (nombre, edad, nota final):

//  Escribe un código que muestre el nombre del alumno con la nota más alta.
//  Calcula y muestra la media de las notas.
//  Muestra un listado de los alumnos mayores de 19 años.


$alumnos = [
    ["nombre" => "Ana", "edad" => 19, "nota" => 7.5],
    ["nombre" => "Luis", "edad" => 21, "nota" => 6.8],
    ["nombre" => "Marta", "edad" => 18, "nota" => 9.2],
    ["nombre" => "Carlos", "edad" => 20, "nota" => 5.4],
   ];

   $mejorAlumno = "";
   $mejorNota = 0;
   $notaTotal = 0;

   foreach($alumnos as $alumno){
        if ($alumno["nota"] > $mejorNota){
            $mejorNota = $alumno["nota"];
            $mejorAlumno = $alumno["nombre"];
        }
        
        $notaTotal += $alumno["nota"];
        if ($alumno["edad"] >= 19){
            echo $alumno["nombre"] . " tiene 19 o más años" . "<br>";
        }
        
        
        
    }
    echo "Alumno: " . $mejorAlumno . ' Nota: ' . $mejorNota . "<br>";
    echo "Media: " .  $notaTotal / count($alumnos);

   
   