<?php
require_once __DIR__ . '/Database.php';

class EmpleadoModel{

    public static function getAll(){
        $db=Database::getConnection();
        $sqlQuery="SELECT * FROM empleados";
        $stmt=$db->prepare($sqlQuery);
        $stmt->execute();
        return $stmt->FetchAll();
    }
    
    public static function getById($dni){
        $db=Database::getConnection();
        $sqlQueryId="SELECT * FROM empleados
                     WHERE dni = :dni";
        $stmt=$db->prepare($sqlQueryId);
        $stmt->execute(['dni'=>$dni]);
        return $stmt->Fetch();
    }
    public static function insert($empleado){
        $db=Database::getConnection();
        $sqlInsert="INSERT INTO empleados(dni,nombre,edad,cumpleanos,email,sexo,cv)
                    VALUES (:dni,:nombre,:edad,:cumpleanos,:email,:sexo,:cv)";
        $stmt=$db->prepare($sqlInsert);
        return $stmt->execute(['dni'=>$empleado['dni'],
                         'nombre'=>$empleado['nombre'],
                         'apellido'=>$empleado['apellido'],
                         'edad'=>$empleado['edad'],
                         'cumpleanos'=>$empleado['cumpleanos'],
                         'email'=>$empleado['email'],
                         'sexo'=>$empleado['sexo'],
                         'cv'=>$empleado['cv']
                       ]);            
    }

    public static function deleteById($dni){
        $db=Database::getConnection();
        $sqlDeleteId="DELETE FROM empleados WHERE dni= :dni";
        $stmt=$db->prepare($sqlDeleteId);
        return $stmt->execute(['dni'=>$dni]);
    }
    public static function deleteAll(){
        $ddb=Database__getConnection();
        $sqlDeleteAll="DELETE * FROM empleados";
        $stmt=$db->prepare($sqlDeleteAll);
        return $stmt->execute();
    }

}