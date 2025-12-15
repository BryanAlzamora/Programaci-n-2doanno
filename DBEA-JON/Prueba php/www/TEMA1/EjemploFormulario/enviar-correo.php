<?php
require_once 'db-function.php';

if (!isset($_GET['id'])) {
    die("Falta el parámetro 'id' del alumno.");
}

$alumno = obtenerAlumnoPorId($_GET['id']);

if (!$alumno) {
    die("Alumno no encontrado.");
}

$destinatario = "profesor@ejemplo.com";
$asunto = "Datos del alumno: $alumno->nombre $alumno->apellidos";
$mensaje = "Nombre: $alumno->nombre\nApellido: $alumno->apellidos\nEmail: $alumno->email\nEdad: $alumno->edad";
$cabeceras = "From: admin@tuweb.com";

if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
    echo "Correo enviado correctamente a $destinatario.";
} else {
    echo "Error al enviar el correo.";
}
