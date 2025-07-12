<?php

//Credenciales para ingresar a la base de datos
function connection(){
    $host = "localhost";
    $user = "root";
    $password = "";

    $bd = "users_crud_php";     #Nombre de la base de datos

    $connect = mysqli_connect($host, $user, $password); #funcion que abre una nueva coneccion con mySQL

    mysqli_select_db($connect, $bd);    #Selecciona la base de datos que quedara por defecto para hacer peticiones ("users_crud_php")

    return $connect;    #retorna lo que esta dentro de connect
};