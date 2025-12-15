<?php 
require_once 'database.php';

function insert($producto){
    //Crear la conexion con la BD
    $db_connection=getDbConnection();
    echo "Conexión establecida correctamente.";
    //Hacer la sentencia SQL de insert
    $sqlInsert="INSERT INTO productos(nombre) VALUES(:nombre)";
    //Prepararla
    $stmt=$db_connection->prepare($sqlInsert);
    //Subirla a la BDnombre
    $stmt->execute(['nombre'=>$producto]);
    echo "El producto se ha insertado correctamente. <br>";
}

function mostrarProductos(){
    $db_connection=getDbConnection();
    //Hacer la sentencia para coger todo los datos
    $sqlSelect="SELECT id,nombre FROM productos";
    //Prepararla en una query
    $stmt=$db_connection->query($sqlSelect);
    //la returneo para meterla en una variable
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
function deleteById($id){
    $db_connection=getDbConnection();
    $sqlDeleteById="DELETE FROM productos WHERE id = :id";
    $stmt=$db_connection->prepare($sqlDeleteById);
    return $stmt->execute(['id'=>$id]);
    echo "Producto eliminado";
}

function eliminarProductos(){
    $db_connection=getDbConnection();
    //También se puede hacer con TRUNCATE FROM PRODUCTOS
    $sqlDelete="DELETE FROM productos";
    $stmt=$db_connection->prepare($sqlDelete);
    return $stmt->execute();
    echo "Los datos han sido borrados";
}
