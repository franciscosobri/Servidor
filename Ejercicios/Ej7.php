<?php

// 7. Escribe un bucle while que imprima los números pares entre 2 y 20.

$number = 2;

while ($number <= 20){
    if($number % 2 == 0){
        echo $number . ' ';
        $number ++;
    }
    else{
        $number ++;
    }
    
}

?>