<?php

/*4. Usando if, muestra si un número $num es positivo, negativo o cero.*/

function comprobaNumero($num){

    if ($num < 0){
        echo "Es negativo. <hr>";
    }
    elseif ($num > 0){
        echo "Es positivo. <hr>";
    }
    else{
        echo "Es cero. <hr>";
    }
}

comprobaNumero(1);
comprobaNumero(-1);
comprobaNumero(0);

?>