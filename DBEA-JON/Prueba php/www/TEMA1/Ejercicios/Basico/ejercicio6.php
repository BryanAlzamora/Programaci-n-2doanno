<!DOCTYPE html>
<?php
    function multiplicacion($varA, $varB) {
        return $varA * $varB;
    }
?>
<body>
    <?php 
        $varA = $_GET['a'];
        $varB = $_GET['b'];

        $resultado = multiplicacion($varA, $varB);
        
        echo "El resultado de la multiplicación es: $resultado <br>";
    ?>
<html>  
