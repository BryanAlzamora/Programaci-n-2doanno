<?php
require_once 'db-function.php';

// Acciones por GET (eliminar por ID, vaciar)
if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];

    switch ($accion) {
        case 'deleteById':
            if (!empty($_GET['id'])) {
                deleteById($_GET['id']);
            }
            break;

        case 'vaciar':
            eliminarProductos();
            break;
    }
}

// Acciones por POST (insertar)
if (isset($_POST['accion']) && $_POST['accion'] === 'insertar') {
    if (!empty($_POST['producto'])) {
        insert($_POST['producto']);
    }
}

// Cargar productos actualizados
$listaProductos = mostrarProductos();

require 'ejercicio1.view.php';
