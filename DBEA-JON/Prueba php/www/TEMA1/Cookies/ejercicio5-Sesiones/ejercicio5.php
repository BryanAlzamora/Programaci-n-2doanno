<?php
//Inicio sesión
session_start();

//Creación de los usuarios
$users= array(
    "user1"=>array(
        "nombre"=>"Juan",
        "apellido"=>"Perez",
        "password"=>"123A"
    ),
    "user2"=>array(
        "nombre"=>"Maria",
        "apellido"=>"Lopez",
        "password"=>"321B"
    ),
    "user3"=>array(
        "nombre"=>"Carla",
        "apellido"=>"Mendez",
        "password"=>"456C"
    )
);
//function para cerrar sesión
function cerrarSesion(){
    session_unset();
    session_destroy();
}

//function para validarLogin
function validarLogin($users,$user,$pwd){  
    if(!isset($users[$user])){
        return "El usuario no es válido";
    }
    if($users[$user]['password']!==$pwd){
        return "La contraseña no es válida";
    }
    return true;// devuelve el login correcto
}

//function para iniciar sesion
function iniciarSesion($user){
    $_SESSION['user']=$user;
}

//LOGICA DE LA APP

//Logica de cerrar sesion
if(isset($_POST['cerrar'])){
    cerrarSesion();
}

//Logica para ingresar a la sesion
if(isset($_POST['user']) && isset($_POST['pwd'])){
    $user=$_POST['user'];
    $pwd=$_POST['pwd'];

    //Le paso a una variable la funcion para ver si me devuelve true
    $login=validarLogin($users,$user,$pwd);
    //uso la función de validar, le paso el array y las dos variables
    if($login===true){
        //inicio la sesion
        iniciarSesion($user);
        //Crea una variable para pasar el nombre y el apellido
        $usuarioIniciado=$users[$user]['nombre'].' '. $users[$user]['apellido'];
        //Me voy a la view del resultado
        require 'ejercicio5-resultado.view.php';
        //uso el exit para que no cargue la otra view
        exit;
    }
}

require 'ejercicio5.view.php';
?>