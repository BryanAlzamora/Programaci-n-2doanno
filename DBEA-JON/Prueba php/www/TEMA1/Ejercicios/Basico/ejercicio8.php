<!DOCTYPE html>
<?php
    function esMayor($varA, $varB) {
        return $varA > $varB;
    }
    $varA=$_GET['a'];
    $varB=$_GET['b'];

    echo esMayor($varA, $varB) ? "El primer número es mayor que el segundo" : "El primer número no es mayor que el segundo";
?>
<html>