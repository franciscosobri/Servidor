<?php

// 22. Dato un array con información de empleados y sus departamentos:
    
//      Calcula el salario medio por departamento.
//      Muestra el empleado con el salario más alto.
//      Crea una función que reciba el departamento y devuelva un array con los
//     nombres de los empleados que trabajan ahí.

    $empleados = [
        ["nombre" => "Laura", "departamento" => "Ventas", "salario" =>
       1200],
        ["nombre" => "Pedro", "departamento" => "Marketing", "salario" =>
       1500],
        ["nombre" => "Sofía", "departamento" => "Ventas", "salario" =>
       1300],
        ["nombre" => "Javier", "departamento" => "IT", "salario" => 1800],
        ["nombre" => "Marta", "departamento" => "Marketing", "salario" =>
       1600],
       ];




       $totalVentas = 0;
       $contadorVentas = 0;

       $totalMarketing = 0;
       $contadorMarketing = 0;

       $totalIt = 0;
       $contadorIt = 0;

       $mejorSalario = 0;
       $nombreSalario = "";

       foreach($empleados as $empleado){

       
        if ($empleado['departamento'] == "Ventas"){
            $totalVentas += $empleado['salario'];
            $contadorVentas++;
        }

        elseif($empleado['departamento'] == "Marketing"){
            $totalMarketing += $empleado['salario'];
            $contadorMarketing++;
        }

        elseif($empleado['departamento'] == "IT"){
            $totalIt += $empleado['salario'];
            $contadorIt++;
        }

        if ($empleado['salario'] > $mejorSalario ){
            $mejorSalario = $empleado['salario'];
            $nombreSalario = $empleado['nombre'];
        }





    }


    function empleadosDepartamentos($departamento, $empleados){
        $empleadosDepartamento = [];

        foreach($empleados as $empleado){

            if($departamento == $empleado['departamento']){
                $empleadosDepartamento[] = $empleado['nombre'];
            }

        }

        print_r ($empleadosDepartamento);

       }

    
   

    echo "Salario medio Ventas: " .  $totalVentas / $contadorVentas . "<br>";
    echo "Salario medio Marketing: " .  $totalMarketing / $contadorMarketing . "<br>";
    echo "Salario medio IT: " .  $totalIt / $contadorIt . "<br>";
    echo $nombreSalario . " tiene el mayor salario." . "<br>";
    empleadosDepartamentos('Marketing', $empleados);

    

