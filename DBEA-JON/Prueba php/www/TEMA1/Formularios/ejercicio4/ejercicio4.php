<?php
$user=$_POST['user'];
$pwd=$_POST['pwd'];

$usuarios=array(
    "user1"=>array(
        "nombre"=>"Pedro",
        "apellido"=>"Lopez",
        "password"=>"123Abc"
    ),
    "user2"=>array(
        "nombre"=>"Juan",
        "apellido"=>"Mendez",
        "password"=>"321Cba"
    ),
    "user3"=>array(
        "nombre"=>"Maria",
        "apellido"=>"Sanchez",
        "password"=>"456Zxc"
    )
    );

function validarUsuario($usuarios,$user,$pwd){
    if(empty($user) || empty($pwd)){
        return "Hay campos que están vacios";
    }

    if(!isset($usuarios[$user])){
        return "Usuario inválido";
    }
    if($usuarios[$user]["password"] !== $pwd){
        return "Contraseña inválida";
    }
    
    return "Bienvenido ". $usuarios[$user]['nombre']." ". $usuarios[$user]['apellido'];
}

$resultado=validarUsuario($usuarios,$user,$pwd);

require "ejercicio4.view.php";
?>