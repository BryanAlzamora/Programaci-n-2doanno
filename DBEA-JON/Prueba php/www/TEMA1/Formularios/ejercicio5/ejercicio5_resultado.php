<?php
function calcularCompra($productos){
    $total=0;
    foreach ($productos as $key => $producto){
        if (isset($_GET[$key])) {
            $total = $total + $producto["precio"]*$_GET[$key];
        }
    }
    return $total;
}

require 'ejercicio5_1.view.php';
 ?>