<?php
require_once __DIR__ . '/../models/User.php';

class BaseController {
    
    protected function render($view, $data = []) {
        // Extraer variables para la vista
        extract($data, EXTR_SKIP);
        
        // Añadir información de usuario a todas las vistas
        $currentUser = $this->currentUser();
        $isLoggedIn = $this->isLoggedIn();
        $idioma = $this->getIdioma();

        // Incluir layout con la vista
        require __DIR__ . "/../views/layout/header.php";
        require __DIR__ . "/../views/{$view}.php";
        require __DIR__ . "/../views/layout/footer.php";
    }
    
    protected function redirect($url) {
        header("Location: {$url}");
        exit;
    }
    
    protected function currentUser() {
        if (!isset($_SESSION['user_id'])) {
            return null;
        }
        
        // Cachear usuario en la sesión para evitar múltiples consultas
        if (!isset($_SESSION['user_data'])) {
            $_SESSION['user_data'] = User::findById($_SESSION['user_id']);
        }
        
        return $_SESSION['user_data'];
    }
    
    protected function isLoggedIn() {
        return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
    }
    
    protected function requireAuth() {
        if (!$this->isLoggedIn()) {
            $this->redirect('index.php?controller=AuthController&accion=login');
        }
    }

    protected function getIdioma() {
        return $_COOKIE['idioma'] ?? 'es';
    }
}