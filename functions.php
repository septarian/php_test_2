<?php

declare(strict_types=1);    //Hace que php no haga converciones automaticas de variables y tengas que mandarle los tipos de variables que se especifican

const API_URL = "https://whenisthenextmcufilm.com/api";

//$title = "hola";
function get_data(string $url): array   #Le especificamos que recibe un string y que devuelve un array
{
    // global $title;  #Indica que usaremos la variable creada fuera de la funcion
    // echo $title;

    $resultado = file_get_contents($url);
    $data = json_decode($resultado, true);
    return $data;
}


function days_until_message(int $days): string
{
    return match(true){
        $days === 0     => "¡Hoy se estrena!",
        $days === 1     => "¡mañana se estrena!",
        $days < 8       => "¡Sale esta semana!",
        $days < 30      => "¡Sale este mes!",
        default         => "¡Sale $days dias!",
    };
}

?>