<!DOCTYPE html>
<?php
    function concatenar($varA, $varB) {
        echo "Hola $varA, ¿cómo estás? Yo soy $varB";
    }
    $varA = $_GET['a'];
    $varB = $_GET['b'];
    concatenar($varA, $varB);
?>
