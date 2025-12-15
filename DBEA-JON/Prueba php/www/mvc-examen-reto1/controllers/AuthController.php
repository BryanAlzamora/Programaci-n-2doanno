<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../models/User.php';

class AuthController extends BaseController {
    
    public function login() {
        // Si ya está logueado, redirigir al inicio
        if ($this->isLoggedIn()) {
            $this->redirect('index.php');
        }
        
        $this->render('auth/login');
    }
    
    public function authenticate() {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        
        // Validar campos
        if (empty($email) || empty($password)) {
            $this->redirect('index.php?controller=AuthController&accion=login');
        }
        
        $user = User::findByEmail($email);
        if (!$user || !User::verifyPassword($user, $password)) {
            $this->redirect('index.php?controller=AuthController&accion=login');
        }

        // Iniciar sesión
        $_SESSION['user_id'] = $user["id"];
        $_SESSION['user_data'] = $user;
        
        $this->redirect('index.php');
    }
    
    public function logout() {
        // Destruir sesión
        session_destroy();
        
        // Limpiar variables de sesión
        $_SESSION = [];
        
        $this->redirect('index.php');
    }
}
