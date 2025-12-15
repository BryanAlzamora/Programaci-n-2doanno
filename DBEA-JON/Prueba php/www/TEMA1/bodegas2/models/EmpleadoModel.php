<?php
require_once __DIR__ . '/Database.php';

class EmpleadoModel {

    static function getAll(){
        $db = Database::getConnection();
        $sql = "SELECT * FROM empleados";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    static function create($datos){
    $db = Database::getConnection();
    $sql = "INSERT INTO empleados 
            (dni, nombre, apellido, edad, cumpleanos, email, sexo, cv) 
            VALUES (:dni, :nombre, :apellido, :edad, :cumpleanos, :email, :sexo, :cv)";
    
    $stmt = $db->prepare($sql);

    $stmt->execute([
        'dni'        => $datos['dni'],
        'nombre'     => $datos['nombre'],
        'apellido'   => $datos['apellido'],
        'edad'       => $datos['edad'],
        'cumpleanos' => $datos['cumpleanos'],
        'email'      => $datos['email'],
        'sexo'       => $datos['sexo'],
        'cv'         => $datos['cv']
    ]);
}

    static function modificar($dni,$datos){
        $db=Database::getConnection();
        $sql="UPDATE empleados 
                SET nombre=:nombre,apellido=:apellido 
                WHERE dni = :dni";
        $stmt= $db->prepare($sql);
        return $stmt->execute(['dni'=>$dni,'nombre' => $datos['nombre'], 'apellido' =>$datos['apellido']]);
    }

    static function eliminarByDni($dni){
        $db=Database::getConnection();
        $sql="DELETE FROM empleados WHERE dni=:dni";
        $stmt=$db->prepare($sql);
        return $stmt->execute(['dni'=>$dni]);
    }
    static function getByDni($dni){
        $db=Database::getConnection();
        $sql="  SELECT dni,nombre,apellido
                FROM empleados
                WHERE dni = :dni";
        $stmt= $db->prepare($sql);
        $stmt->execute(['dni'=>$dni]);
        return $stmt->fetch();
    }


   

}