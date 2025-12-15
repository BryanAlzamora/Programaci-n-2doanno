<?php

$dia=$_GET['dia'] ?? '';


function diaSemana($dia) {
    switch($dia){
        case 1:
            return "Hoy es Lunes";
            break;
        case 2:
            return "Hoy es Martes";
            break;
        case 3:
            return "Hoy es Miercoles";
            break;
        case 4:
            return "Hoy es Jueves";
            break;
        case 5:
            return "Hoy es Viernes";
            break;
        case 6:
            return "Hoy es Sabado";
            break;
        case 7:
            return "Hoy es Domingo";
            break;
        default:
            return "No es un dia valido";
            break;
    }
} 
$resultado=diaSemana($dia);
include "ejercicio18.view.php"; // Incluye la vista para mostrar el formulario y el resultado

?>
/**
    http://localhost/Ejercicios/Switch/ejercicio18.php?dia=1
*/