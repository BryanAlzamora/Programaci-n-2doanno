<?php
$usuario=$_COOKIE['usuario'] ?? 'invitado';


if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
    setcookie('usuario', $_POST['usuario'], time()+3600);
    $usuario=$_POST['usuario'];
}


if(isset($_GET['borrar'])){
    setcookie('usuario','',time()-3600);
    $usuario='invitado';
}

require 'ejercicio2.view.php';
?>