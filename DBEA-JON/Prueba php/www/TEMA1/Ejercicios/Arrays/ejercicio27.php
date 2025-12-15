<?php
    $grupos=["Grupo1","Grupo2","Grupo3","Grupo4","Grupo5","Grupo6","Grupo7","Grupo8"];


    function mostrarGrupos($grupos){
        echo"<ul>";
        foreach($grupos as $grupo){
             echo "<li>Nombre del grupo: " . $grupo . "</li>";
        }
        echo"</ul>";
    }
    require 'ejercicio27.view.php';
?>