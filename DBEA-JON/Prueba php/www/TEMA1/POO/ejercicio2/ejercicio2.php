<?php

require_once 'models/classPublicacion.php';
use ejercicio2\models\Publicacion;

$pub1=new Publicacion("Carlos","2001","Pakkka","Los 100","Acerca de POO");

$pub1->escribir("Hola soy pub1");
echo $pub1->leer();
?>