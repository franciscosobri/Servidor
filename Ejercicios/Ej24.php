<?php

// 24.- Dato un array con datos de usuarios y roles:

//  Cuenta cuántos usuarios activos hay.
//  Muestra los nombres de usuarios que tienen rol "admin".
//  Cambia el estado a inactivo (activo = false) para todos los usuarios con
// rol "editor".


$usuarios = [
["usuario" => "juan", "rol" => "admin", "activo" => true],
["usuario" => "maria", "rol" => "editor", "activo" => false],
["usuario" => "pablo", "rol" => "admin", "activo" => true],
["usuario" => "laura", "rol" => "suscriptor", "activo" => true],
];

function count_actives(){
    global $usuarios;

    $total_actives = 0;

    foreach($usuarios as $usuario){

        if ($usuario['activo'] == true){
            $total_actives++;
        }
    }

    echo $total_actives . '<br>';
}

function names(){

    global $usuarios;

    foreach($usuarios as $usuario){

        if($usuario['rol'] == 'admin'){
            echo $usuario['usuario'] . '<br>';
        }
    }
}

function change_active(){
    
    global $usuarios;

    foreach($usuarios as $usuario){

        if($usuario['rol'] == 'editor'){
            $usuario['activo'] = false;
        }
    }

    print_r($usuarios);
}



count_actives();
names();
change_active();



