<?php
session_start();

if(!isset($_SESSION['personas'])){
    $_SESSION['personas']=[];
}

if(isset($_POST['persona']) && !empty($_POST['persona'])){
    $_SESSION['personas'][]=$_POST['persona'];
}

if(isset($_GET['vaciar'])){
    $_SESSION['personas']=[];
}
$personas=$_SESSION['personas'];
require 'ejercicio4.view.php';
?>