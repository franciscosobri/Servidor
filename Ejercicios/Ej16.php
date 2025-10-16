<?php

// 16. Usa un bucle foreach para imprimir los caracteres de una cadena uno por uno.

$string = 'Macarrones';

foreach(str_split($string) as $letter){
    echo $letter . ' ';
}