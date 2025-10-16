<?php

// 23.- Dado el array con información de películas:

//  Muestra todas las películas dirigidas por Nolan.
//  Calcula la duración media de las películas.
//  Ordena las películas por año de estreno ascendente.

    $peliculas = [
        ["titulo" => "Inception", "director" => "Nolan", "anio" => 2010,
        "duracion" => 148],
        ["titulo" => "Interstellar", "director" => "Nolan", "anio" => 2014,
        "duracion" => 169],
        ["titulo" => "Memento", "director" => "Nolan", "anio" => 2000,
        "duracion" => 113],
        ["titulo" => "Titanic", "director" => "Cameron", "anio" => 1997,
        "duracion" => 195],
        ];


    $total_time = 0;


    function nolan_movies(){
        global $peliculas;
        foreach($peliculas as $pelicula){
        
            

            if($pelicula['director'] == 'Nolan'){
            
                echo $pelicula['titulo'] . ' ';
        
            }
        }
    }

    function media(){
        global $peliculas;
        $total = 0;
        $total_movies = 0;

        foreach($peliculas as $pelicula){


            $total += $pelicula['duracion'];
            $total_movies++;
        }
        echo $total / $total_movies . '<br>';
    }

    usort($peliculas, function($a, $b){
        return $a['anio'] <=> $b['anio'];
    });
    
    nolan_movies();
    media();

    print_r($peliculas);
    
    



