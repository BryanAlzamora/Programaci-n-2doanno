<!DOCTYPE html>
<?php
    function suma($varA, $varB) {
        return $varA + $varB;
    }
    function comparacion($varA, $varB){
        if($varA > $varB){
            return "$varA es mayor que $varB";
        } elseif ($varA < $varB) {
            return "$varA es menor que $varB";
        } else {
            return "$varA es igual a $varB";
        }
    }
?>
<html>
    <head>
        <title>PHP Test </title>
    </head>

    <body>
        <?php 
        $varA = 10;
        $varB = 20;

        $resultado = suma($varA, $varB);
        
        echo "El resultado de la suma es: $resultado <br>";

        echo comparacion($varA, $varB);
        ?>
    </body>

</html>