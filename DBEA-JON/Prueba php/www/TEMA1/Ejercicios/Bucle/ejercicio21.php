<?php
$var = $_GET["var"] ?? '';

function suma($var) {
    $suma = 0;
    $ultimo = 0; // guardará el valor antes de superar 100

    if ($var % 2 == 0) {
        for ($i = 0; $i <= $var; $i = $i + 2) {
            if ($suma + $i > 100) {
                return $ultimo; // devolvemos el último valor antes de pasarse
            }
            $suma += $i;
            $ultimo = $suma; // guardamos el valor actual como "último válido"
        }
    }
    return $suma;
}

$resultado = suma($var);

include "ejercicio21.view.php"; // Incluye la vista para mostrar el formulario y el resultado
?>

http://localhost/Ejercicios/Bucle/ejercicio21.php?var=20