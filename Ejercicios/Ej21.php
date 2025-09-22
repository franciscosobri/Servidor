<?php


// 21. Dado este array con información sobre productos:
    
//      Muestra solo los productos que tienen stock disponible (>0).
//      Calcula el valor total de inventario (precio * stock sumados).
//      Ordena el array por precio de mayor a menor y muéstralo (PREGUNTAR EN CLASES).


    $productos = [
        ["nombre" => "Camiseta", "precio" => 15.99, "stock" => 10],
        ["nombre" => "Pantalón", "precio" => 35.5, "stock" => 0],
        ["nombre" => "Zapatos", "precio" => 55.0, "stock" => 5],
        ["nombre" => "Gorra", "precio" => 12.0, "stock" => 20],
       ];

       $total = 0; 

       foreach ($productos as $producto){

        if ($producto['stock'] > 0){
            echo $producto['nombre'] . ' ';
            $total += $producto['precio'] * $producto['stock'];
        }


        


       }

       echo $total;