<?php

function conectar_auth(){
    $servidor="localhost";
    $database= "ci_auth";
    $usuario = "root";
    $entrada = "";

    $conexion = new mysqli($servidor,$usuario,$entrada,$database);
   
}