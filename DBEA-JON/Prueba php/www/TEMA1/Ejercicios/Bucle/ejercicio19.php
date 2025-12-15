<?php
$var=$_GET["var"] ?? '';

function suma($var) {
    $suma=0;
    for($i=0;$i<=$var;$i++){
        $suma=$suma+$i;
    }
    return $suma;
}
include "ejericicio19.view.php"; // Incluye la vista para mostrar el formulario y el resultado
?>
/**
http://localhost/Ejercicios/Bucle/ejercicio19.php?var=5
*/