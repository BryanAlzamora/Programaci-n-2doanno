<?php
// Punto de entrada de la aplicación
// Iniciar sesión
if (session_status() === PHP_SESSION_NONE) session_start();

// Cargar configuración
require_once __DIR__ . '/config/config.php';

// Cargar Router
require_once __DIR__ . '/Router.php';

// Dispatch
Router::dispatch();
