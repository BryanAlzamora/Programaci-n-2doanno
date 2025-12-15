<?php
require_once __DIR__ . '/BaseController.php';

class IdiomaController extends BaseController {
    
    public function cambiar() {
        $idioma = $_POST['idioma'] ?? 'es';
        
        // Validar que el idioma sea válido
        if (!in_array($idioma, ['es', 'eu'])) {
            $idioma = 'es';
        }
        
        // Establecer cookie por 30 días
        setcookie('idioma', $idioma, time() + (30 * 24 * 60 * 60), '/');
        
        // Redirigir a la página anterior o al inicio
        $referer = $_SERVER['HTTP_REFERER'] ?? 'index.php';
        $this->redirect($referer);
    }
}
