<?php
$temp=$_POST['temp'] ?? '';
$unidad=$_POST['unidad'] ?? '';
$resultado='';


function conversion($temp, $unidad){
    if($unidad == "celsius"){
        return ($temp*9/5) + 32;
    }elseif($unidad=="far"){
        return ($temp-32) * 5/9;
    }
    return null;
}
if($temp!=='' && $unidad!==''){
    $resultado=conversion($temp,$unidad);
}
require 'ejercicio1.view.php';
?>