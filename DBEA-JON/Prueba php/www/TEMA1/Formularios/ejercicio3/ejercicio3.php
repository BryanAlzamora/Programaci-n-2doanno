<?php
$asunto=$_POST['asunto']?? '';
$nombre=$_POST['nombre']?? '';
$email=$_POST['email']?? '';
$motivo=$_POST['motivo']?? '';
$mensaje=$_POST['mensaje']?? ' ';

function mostrarTodo($asunto,$nombre,$email,$motivo,$mensaje){
    $motivoss=[
        "soptec"=>"Soporte técnico",
        "infpro"=>"Información de productos",
        "queja"=>"Queja",
        "otro"=>"Otro"
    ];
    $motivoEscogido=$motivoss[$motivo];
    if(empty($asunto) || empty($email) || empty($motivo) || empty($mensaje)){
        return "Por favor, rellena el formulario de contacto";
    }else{
        return "
        El formulario se ha enviado con éxito. Estos son los datos recibidos.
        <ul>
            <li><strong>Asunto:</strong> $asunto</li>
            <li><strong>Nombre:</strong> $nombre</li>
            <li><strong>Email:</strong> $email</li>
            <li><strong>Motivo:</strong> $motivoEscogido</li>
            <li><strong>Mensaje:</strong> $mensaje</li>
        </ul>";
    }
}
$resultado=mostrarTodo($asunto,$nombre,$email,$motivo,$mensaje);
require "ejercicio3.view.php";
?>