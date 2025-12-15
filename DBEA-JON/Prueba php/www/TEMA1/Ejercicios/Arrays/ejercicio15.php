<?php

$diccionario=[
   "jperez" => [
        "nombre"   => "Juan",
        "apellidos"=> "Pérez",
        "email"    => "jperez@gmail.com"
    ],
    "mgomez" => [
        "nombre"   => "María",
        "apellidos"=> "Gómez",
        "email"    => "mgomez@gmail.com"
    ],
    "lmartinez" => [
        "nombre"   => "Luis",
        "apellidos"=> "Martínez",
        "email"    => "lmartinez@gmail.com"
    ]
];
$usuario=$_GET['usuario'] ?? null;
$dato=$_GET['dato'] ?? null;

function getDatos($diccionario,$usuario,$dato){
    /*uso isset para verificar si una variable existe y no es null,
    es similar al array_key_exists*/
    if(isset($diccionario[$usuario]) && isset($diccionario[$usuario][$dato])){
        return $diccionario[$usuario][$dato];
        
    } else {
        return "No existe ese usuario o dato";
    }
}
$resultado=getDatos($diccionario,$usuario,$dato);

include "ejercicio15.view.php"; // Incluye la vista para mostrar el formulario y el resultado
?>

/**
http://localhost/Ejercicios/Arrays/ejercicio15.php/?usuario=jperez&dato=email
 */