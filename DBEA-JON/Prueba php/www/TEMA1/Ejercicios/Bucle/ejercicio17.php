<?php

$user=$_GET['user'] ?? '';
$pwd=$_GET['pwd'] ?? '';

$usuarios=[
    "user1"=>[
        "nombre"=>"Pepe",
        "pwd"=>"1234",
        "email"=>"pepe@gmail.com"],
    "user2"=>[
        "nombre"=>"Ana",
        "pwd"=>"abcd",
        "email"=>"ana@gmail.com"],
    "user3"=>[
        "nombre"=>"Luis",  
        "pwd"=>"xyz",
        "email"=>"luis@gmail.com"]
];

function validar($usuarios,$user,$pwd){
    //Verificar si el usuario existe
    if(!isset($usuarios[$user])){
        return "El usuario no existe";
    }
    elseif($usuarios[$user]["pwd"]!==$pwd){
        return "La contraseña es incorrecta";
    }

    return "Bienvenido ".$usuarios[$user]["nombre"].", tu email es: ".$usuarios[$user]["email"];
    
}
$resultado=validar($usuarios,$user,$pwd);
include "ejercicio17.view.php"; // Incluye la vista para mostrar el formulario y el resultado
?>

/*
http://localhost/Ejercicios/Bucle/ejercicio17.php?user=user1&pwd=1234
http://localhost/Ejercicios/Bucle/ejercicio17.php?user=user1&pwd=12345
*/