<?php
$paises=["Brasil","Portugal","Islandia","Mexico","Filipinas","Marruecos"];

$pais=$_GET["pais"] ?? '';

function encontrarPosicion($paises,$pais) {
    $posiciones=count($paises);
    for ($i=0;$i<$posiciones;$i++) {
        if($paises[$i]==$pais){
            return $i;
        }
    }
    return -1;
}
require 'ejercicio22.view.php';
?>


/*http://localhost/Ejercicios/Arrays/ejercicio22.php?pais=Islandia
http://localhost/Ejercicios/Arrays/ejercicio22.php?pais=Egipto
*/