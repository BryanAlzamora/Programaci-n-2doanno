<?php
$var=$_GET["var"] ?? '';

function suma($var) {
    $suma=0;
    if($var%2==0){
        for($i=0;$i<=$var;$i=$i+2){
            $suma=$suma+$i;
        }
    }
    return $suma;
}
include "ejercicio20.view.php"; // Incluye la vista para mostrar el formulario y el resultado
?>
/**
http://localhost/Ejercicios/Bucle/ejercicio20.php?var=5
*/