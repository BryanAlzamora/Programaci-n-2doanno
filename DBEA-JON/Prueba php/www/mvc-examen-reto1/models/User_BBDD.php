<?php
require_once __DIR__ . '/Database.php';

class User {
    
    public static function findByEmail($email) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch();
    }
    
    public static function findById($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
    
    public static function create($data) {
        $db = Database::getConnection();
        
        // Validar datos
        $errors = self::validate($data);
        if (!empty($errors)) {
            return ['success' => false, 'errors' => $errors];
        }
        
        // Encriptar contraseña
        $hashedPassword = password_hash($data['password'], PASSWORD_BCRYPT);
        
        $sql = "INSERT INTO users (nombre, email, password) VALUES (:nombre, :email, :password)";
        $stmt = $db->prepare($sql);
        
        try {
            $stmt->execute([
                'nombre' => $data['nombre'],
                'email' => $data['email'],
                'password' => $hashedPassword
            ]);
            return ['success' => true, 'user_id' => $db->lastInsertId()];
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) { // Duplicate entry
                return ['success' => false, 'errors' => ['El email ya está registrado']];
            }
            return ['success' => false, 'errors' => ['Error al crear usuario']];
        }
    }
    
    public static function verifyPassword($email, $password) {
        $user = self::findByEmail($email);
        
        if (!$user) {
            return false;
        }
        
        return password_verify($password, $user->password) ? $user : false;
    }
    
    public static function validate($data) {
        $errors = [];
        
        // Sanitizar datos
        $nombre = trim($data['nombre'] ?? '');
        $email = trim($data['email'] ?? '');
        $password = $data['password'] ?? '';
        $confirmPassword = $data['confirm_password'] ?? '';
        
        // Validar nombre
        if (empty($nombre)) {
            $errors[] = 'El nombre es obligatorio';
        } elseif (strlen($nombre) < 2) {
            $errors[] = 'El nombre debe tener al menos 2 caracteres';
        }
        
        // Validar email
        if (empty($email)) {
            $errors[] = 'El email es obligatorio';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'El email no es válido';
        }
        
        // Validar contraseña
        if (empty($password)) {
            $errors[] = 'La contraseña es obligatoria';
        } elseif (strlen($password) < 5) {
            $errors[] = 'La contraseña debe tener al menos 5 caracteres';
        }
        
        // Validar confirmación de contraseña
        if (isset($data['confirm_password'])) {
            if (empty($confirmPassword)) {
                $errors[] = 'Debes confirmar la contraseña';
            } elseif ($password !== $confirmPassword) {
                $errors[] = 'Las contraseñas no coinciden';
            }
        }
        
        return $errors;
    }
}
