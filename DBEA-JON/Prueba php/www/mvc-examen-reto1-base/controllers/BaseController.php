<?php
require_once __DIR__ . '/../models/User.php';

class BaseController {
    
    protected function render($view, $data = []) {
        // Extraer variables para la vista
        extract($data, EXTR_SKIP);
        

        // Incluir layout con la vista
        require __DIR__ . "/../views/layout/header.php";
        require __DIR__ . "/../views/{$view}.php";
        require __DIR__ . "/../views/layout/footer.php";
    }
    
    protected function redirect($url) {
        header("Location: {$url}");
        exit;
    }

    // Funciones que pueden servir de ayuda para lograr algunas funcionalidades
    protected function currentUser() {
        
    }
    
    protected function isLoggedIn() {
        
    }

    protected function getIdioma() {
       
    }
}