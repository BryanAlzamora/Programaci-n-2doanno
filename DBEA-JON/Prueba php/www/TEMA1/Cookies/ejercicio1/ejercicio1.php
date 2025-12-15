<?php 
$usuario=$_COOKIE['usuario'] ?? 'invitado';
if(isset($_POST['usuario'])){
    setcookie('usuario', $_POST['usuario'], time()+3600);
    $usuario=$_POST['usuario'];
}
require 'ejercicio1.view.php';
?>