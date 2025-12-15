<?php
$var1=$_POST['var1'] ?? 0;
$var2=$_POST['var2'] ?? 0;
$operacion=$_POST['operacion'] ?? 0;
$resultado=0;

function operaciones($var1,$var2,$operacion){
    if($operacion==="suma"){
        return $var1+$var2;
    }elseif($operacion==="resta"){
        return $var1-$var2;
    }elseif($operacion==="multi"){
        return $var1*$var2;
    }elseif($operacion==="division"){
        if($var1 === 0 || $var2 ===0){
            return null;
        }else{
            return $var1/$var2;
        }
    }
    return null;
}

$resultado=operaciones($var1,$var2,$operacion);
require 'ejercicio2.view.php';
?>