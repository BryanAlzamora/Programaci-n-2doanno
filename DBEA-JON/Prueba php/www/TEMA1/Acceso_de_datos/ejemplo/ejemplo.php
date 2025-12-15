<?php

$host = "localhost";
$dbname = "ejemplo";
$usuario = "root";
$contrasena = "";

// Función para conectar a la base de datos usando PDO
function connect($host, $dbname, $user, $pass){
   try {
        # MySQL
        $dbh= new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        // Activar el modo de errores de PDO (lanza excepciones si algo falla)
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	   return $dbh;
   }
   catch(PDOException $e) {
       echo $e->getMessage();
   }
}



try {
    // 1. Creamos el objeto PDO
    $dbh = connect($host, $dbname, $usuario, $contrasena);

    // 2. Insertar un alumno con consulta preparada
    $sqlInsert = "INSERT INTO alumnos (nombre, apellidos, email, edad)
                  VALUES (:nombre, :apellidos, :email, :edad)";
    
    $stmt = $dbh->prepare($sqlInsert);

    // Datos a insertar (ejemplo)
    $nuevoAlumno = array(
        "nombre" => "Lorena",
        "apellidos" => "Anboto Etxebarria",
        "email" => "lorena@ejemplo.org",
        "edad" => 18
    );

    $stmt->execute($nuevoAlumno);

    echo "Alumno insertado correctamente.<br>";

    // 3. Seleccionar y mostrar todos los alumnos
    $sqlSelect = "SELECT id, nombre, apellidos, email, edad FROM alumnos";
    $stmt = $dbh->query($sqlSelect);

    echo "<h3>Lista de alumnos:</h3>";

    // 4. fetch() devuelve una fila en cada llamada, o false cuando no hay más
    while ($alumno = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $alumno['id'] . " | ";
        echo "Nombre: " . $alumno['nombre'] . " " . $alumno['apellidos'] . " | ";
        echo "Email: " . $alumno['email'] . " | ";
        echo "Edad: " . $alumno['edad'] . "<br>";
    }

} catch (PDOException $e) {
    echo "Error en la conexión o consulta: " . $e->getMessage();
}
?>