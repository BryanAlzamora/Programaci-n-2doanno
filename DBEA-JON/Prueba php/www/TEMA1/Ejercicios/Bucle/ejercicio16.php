<?php
$a=$_GET['a'] ?? '';
$b=$_GET['b'] ?? '';


function multiplicar($a,$b) {
    return $a * $b;
}
 
function sumar($a,$b) {
    return $a + $b;
}

function resultado($a,$b) {
    if($a==$b){
    return "El resultado de la multiplicación es: " . multiplicar($a,$b);
     }
    else{
    return "El resultado de la suma es: " . sumar($a,$b);
    }
}

include "ejercicio16.view.php"; // Incluye la vista para mostrar el formulario y el resultado
?>

/**
http://localhost/Ejercicios/Bucle/ejercicio16.php/?a=2&b=2
http://localhost/Ejercicios/Bucle/ejercicio16.php/?a=2&b=3
*/