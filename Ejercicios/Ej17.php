// 17. Crea una función que reciba un número y devuelva su factorial.

function factorial($number){
    $factorial = 1;
    for($i = 1; $i <= $number; $i++){
        $factorial *= $i;
    }
    echo $factorial;
}

factorial(5);

