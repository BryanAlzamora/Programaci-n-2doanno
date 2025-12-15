<?php


if(isset($_COOKIE['idioma'])) {
    $idioma=$_COOKIE['idioma'];
}
else {
    $idioma = 'no seleccionado';
}


if(isset($_POST['idioma']) && !empty($_POST['idioma'])){
    setcookie('idioma',$_POST['idioma'],time()+60);
}
require 'ejercicio3.view.php';
?>
