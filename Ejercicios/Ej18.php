<?php

// 18. Crea una función que convierta una temperatura en grados Celsius a
// Fahrenheit.

function fahrenheit($grados){
    
    $total = ($grados * (9/5)) + 32;
    
    echo $total;
}

fahrenheit(1);