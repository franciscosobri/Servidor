<?php

// 9. Crea una función que reciba un número y devuelva si es par o impar.

function parImpar($number){
    if($number % 2 == 0){
        echo "Es par.";
    }
    else{
        echo "Es impar.";
    }
}

parImpar(32);
parImpar(43);