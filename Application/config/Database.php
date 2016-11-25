<?php

function conectar_auth(){
    $servidor="localhost";
    $database= "improve";
    $usuario = "root";
    $entrada = "";

    $conexion = new mysqli($servidor,$usuario,$entrada,$database);
   
}