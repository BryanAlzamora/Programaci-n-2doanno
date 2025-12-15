<?php
    function concatenar($a,$b)
    {
        return "Hola $a, ¿cómo estás? Yo soy $b";
    }

    $a=$_GET['a'] ?? "Primera variable"; //si pongo ?? "text" es para que si no hay nada en la URL ponga "text"
    $b=$_GET['b'] ?? "Segunda variable";
    $resultado = concatenar($a,$b);

include "ejercicio11.view.php"; // Incluye la vista para mostrar el formulario y el resultado