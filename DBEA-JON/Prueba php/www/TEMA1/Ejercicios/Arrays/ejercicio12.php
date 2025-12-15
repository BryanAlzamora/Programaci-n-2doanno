<?php
$ciudades=["Paris","Berlin","Amsterdam","Praga"];
$getPos=$_GET['pos'] ?? 0; //si pongo ?? "text" es para que si no hay nada en la URL ponga "text"
$getCiudad=$_GET['valor'] ?? "No has puesto nada";

function getValor($arrayCiudades,$getPos) {
    return $arrayCiudades[$getPos] ?? "No existe esa posición";
}

function setValor($arrayCiudades,$getPos,$getCiudad) {
    global $ciudades;
    return $arrayCiudades[$getPos] = $getCiudad;
}

$valorOriginal=getValor($ciudades,$getPos);

$$ciudades=setValor($ciudades,$getPos,$getCiudad);

$nuevoValor=getValor($ciudades,$getPos);

include "ejercicio12.view.php"; // Incluye la vista para mostrar el formulario y el resultado
?>