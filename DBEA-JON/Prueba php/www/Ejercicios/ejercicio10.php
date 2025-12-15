<!DOCTYPE html>
<?php
    function concatenar($varA, $varB) {
        echo "Hola $varA, ¿cómo estás? Yo soy $varB";
    }
    $varA = $_GET['a'] ?? "Primera variable"; //si pongo ?? "text" es para que si no hay nada en la URL ponga "text"
    $varB = $_GET['b'] ?? "Segunda variable";
    concatenar($varA, $varB);
?>
