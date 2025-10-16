<?php

// 19. En una web que simula una calculadora, un usuario puede introducir dos
// números y la web le dirá cual de los es mayor. Teniendo en cuenta que el primer
// número estará en una variable llamada $a, el segundo número viene almacenado
// en la variable $b y el operador en una variable llamada $operador, realiza un
// programa que imprima la salida de la operación. Ten en cuenta los posibles
// errores que se pueden dar en el caso de la división.

function calculadora($a, $b, $operador) {
    
    switch ($operador){

        case "+":
            echo $a . ' ' . $operador . ' ' . $b . ' = ' . $a + $b . '<br>';
            break;
        
        case "-":
            echo $a . ' ' . $operador . ' ' . $b . ' = ' . $a - $b . '<br>';
            break;


        case "*":
            echo $a . ' ' . $operador . ' ' . $b . ' = ' . $a * $b . '<br>';
            break;

        case "/":
            if ($b == 0){
                echo "Error";
                break;
            }
            else{
                echo $a . ' ' . $operador . ' ' . $b . ' = ' . $a / $b . '<br>';
                break;
            }
        }
}

calculadora(10, 2, "+");
calculadora(10, 2, "-");
calculadora(10, 2, "*");
calculadora(10, 2, "/");
calculadora(10, 0, "/");