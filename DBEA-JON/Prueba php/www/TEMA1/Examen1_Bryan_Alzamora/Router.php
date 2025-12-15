<?php

class Router {
    
    // Como el router no tiene estados, los métodos pueden ser estáticos.
    public static function dispatch() {
        // Determinar controlador (por defecto TorneoController)
        $controllerName = $_GET['controller'] ?? 'TorneoController';
        
        // Determinar acción (priorizar POST para mutaciones)
        $action = $_POST['accion'] ?? $_GET['accion'] ?? 'index';
        
        // Cargar y ejecutar controlador
        self::loadController($controllerName, $action);
    }
    
    private static function loadController($controllerName, $action) {
        // Construir ruta del archivo del controlador
        $controllerFile = __DIR__ . "/controllers/{$controllerName}.php";
        if (!file_exists($controllerFile)) {
            header('Content-Type: text/plain; charset=utf-8');
            echo "Controlador {$controllerName} no encontrado (buscar: {$controllerFile})";
            exit;
        }
        require_once $controllerFile;
        
        if (!class_exists($controllerName)) {
            header('Content-Type: text/plain; charset=utf-8');
            echo "Clase {$controllerName} no encontrada en el archivo";
            exit;
        }
        
        // Instanciar controlador
        $controller = new $controllerName();

        // Verificar método
        if (!method_exists($controller, $action)) {
            header('Content-Type: text/plain; charset=utf-8');
            echo "Acción {$action} no encontrada en el controlador {$controllerName}";
            exit;
        }

        // Ejecutar método
        $controller->$action();
    }
    

}