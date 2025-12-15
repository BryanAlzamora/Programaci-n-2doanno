<?php

$animales=["Perro","Gato","Loro","Tortuga"];
$colores=["Rojo","Azul","Verde","Amarillo"];

// Añadimos elementos

array_push($animales, "Hamster");
array_unshift($colores, "Negro");

// Unión de arrays
$union = array_merge($animales, $colores);

include "ejercicio13.view.php"; // Incluye la vista para mostrar el formulario y el resultado
?>
