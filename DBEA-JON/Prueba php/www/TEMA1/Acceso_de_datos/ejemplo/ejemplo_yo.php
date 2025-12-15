<?php
$host='localhost';
$dbname='bd';
$user='root';
$pwd='';

// FUNCION PARA CONECTAR LA BD
function conectarBD($host,$dbname,$user,$pwd){
    try{
        // Crear una nueva conexión PDO
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
        // Activar el modo de errores de PDO (lanza excepciones si algo falla)
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }catch(PDOException $e){
        // Mostrar mensaje de error si falla la conexión
        echo $e->getMessage();
    }
}

// Crear el objeto PDO
$dbh = conectarBD($host, $dbname, $user, $pwd);

// Crear un nuevo alumno
$nuevoAlumno = array(
    "nombre" => "Pedro",
    "apellidos" => "Madrid Bar",
    "email" => "pedro2@gmail.com",
    "edad" => "21"
);

// Insertar el alumno y mostrar la lista
insertarAlumno($dbh, $nuevoAlumno);
mostrarAlumnos($dbh);


// FUNCIONES

function insertarAlumno($dbh, $nuevoAlumno){
    // Crear la sentencia SQL para insertar un nuevo alumno
    $sqlInsert = "INSERT INTO alumnos(nombre, apellidos, email, edad) 
                  VALUES(:nombre, :apellidos, :email, :edad)";
    // Preparar la sentencia
    $stmt = $dbh->prepare($sqlInsert);
    // Ejecutar la sentencia con los datos del alumno
    $stmt->execute($nuevoAlumno);
}

function mostrarAlumnos($dbh){
    try{
        // Consulta para obtener todos los alumnos
        $listaAlumnos = "SELECT ID, NOMBRE, APELLIDOS, EMAIL, EDAD FROM alumnos";
        $stmt = $dbh->query($listaAlumnos);
        echo "<h1>Lista de alumnos: </h1>";

        // Obtener los resultados como objetos (PDO::FETCH_OBJ)
        while ($alumno = $stmt->fetch(PDO::FETCH_OBJ)) {
            // Acceder a las propiedades del objeto directamente con flechas ->
            echo "ID: " . $alumno->ID . 
                 " | Nombre: " . $alumno->NOMBRE . 
                 " | Apellidos: " . $alumno->APELLIDOS . 
                 " | Email: " . $alumno->EMAIL . 
                 " | Edad: " . $alumno->EDAD . "<br>";
        }
    }catch(PDOException $e){
        // Mostrar mensaje de error si falla la consulta
        echo "Error con mostrarAlumnos: " . $e->getMessage();
    }
}
?>
