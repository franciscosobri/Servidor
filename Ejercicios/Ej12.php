
<?php

// 12. Crea una función que reciba dos números y devuelva el mayor.

function mayor($number1, $number2){

    if ($number1 > $number2){
        echo $number1;
    }
    else{
        echo $number2;
    }
}

mayor(6, 4);
mayor(2, 4);
