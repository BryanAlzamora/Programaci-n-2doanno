<?php
require_once __DIR__ . '/Database.php';

class Torneo {
    
    public static function getAll() {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM torneos ORDER BY fecha ASC");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public static function findById($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM torneos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
    
    public static function create($data) {
        $db = Database::getConnection();
        
        // Validar datos (opcional, no obligatorio)
        $errors = self::validate($data);
        if (!empty($errors)) {
            return;
        }
        
        $sql = "INSERT INTO torneos (titulo, juego, descripcion, fecha, plazas_totales) 
                VALUES (:titulo, :juego, :descripcion, :fecha, :plazas)";
        
        $stmt = $db->prepare($sql);
        
        return $stmt->execute([
                'titulo' => $data['titulo'],
                'juego' => $data['juego'],
                'descripcion' => $data['descripcion'] ?? '',
                'fecha' => $data['fecha'],
                'plazas' => $data['plazas_totales']
            ]);
    }
    
    public static function cambiarEstado($torneoId, $nuevoEstado) {
        $db = Database::getConnection();
        $sql = "UPDATE torneos SET estado = :estado WHERE id = :id";
        $stmt = $db->prepare($sql);
        return $stmt->execute([
            'id' => $torneoId,
            'estado' => $nuevoEstado
        ]);
    }
    
    public static function delete($torneoId) {
        $db = Database::getConnection();
        $sql = "DELETE FROM torneos WHERE id = :id";
        $stmt = $db->prepare($sql);
        return $stmt->execute(['id' => $torneoId]);
    }
    
    public static function validate($data) {
        $errors = [];
        
        // Sanitizar datos
        $titulo = trim($data['titulo'] ?? '');
        $juego = trim($data['juego'] ?? '');
        $fecha = $data['fecha'] ?? '';
        $plazas = $data['plazas_totales'] ?? 0;
        
        // Validar título
        if (empty($titulo)) {
            $errors[] = 'El título es obligatorio';
        } elseif (strlen($titulo) < 3) {
            $errors[] = 'El título debe tener al menos 3 caracteres';
        }
        
        // Validar juego
        if (empty($juego)) {
            $errors[] = 'El juego es obligatorio';
        }
        
        // Validar fecha
        if (empty($fecha)) {
            $errors[] = 'La fecha es obligatoria';
        } elseif (strtotime($fecha) < strtotime('today')) {
            $errors[] = 'La fecha no puede ser anterior a hoy';
        }
        
        // Validar plazas
        if (!is_numeric($plazas) || $plazas < 2) {
            $errors[] = 'Las plazas deben ser al menos 2';
        } elseif ($plazas > 100) {
            $errors[] = 'Las plazas no pueden superar 100';
        }
        
        return $errors;
    }
}
