<?php

declare(strict_types=1);    //Hace que php no haga converciones automaticas de variables y tengas que mandarle los tipos de variables que se especifican

function render_template(string $template, array $data = []): void
{
    extract($data);     #extrae todos las variables y las deja en este ambito
    require "templates/$template.php";
}

//$title = "hola";
// function get_data(string $url): array   #Le especificamos que recibe un string y que devuelve un array
// {
//     // global $title;  #Indica que usaremos la variable creada fuera de la funcion
//     // echo $title;

//     $resultado = file_get_contents($url);
//     $data = json_decode($resultado, true);
//     return $data;
// }