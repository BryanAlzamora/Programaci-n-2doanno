<!DOCTYPE>
<html>
<head>
    <title>Ejercicios con array</title>
</head>
<body>
    <p>24. Crea un array multidimensional que simule una agenda de contactos (contendrá de cada
        persona su nombre, apellidos, teléfono y dirección de correo electrónico). Implementa una
función que imprima en una tabla los datos de las personas utilizando la sentencia for.
Nota: Puedes utilizar la función count() para conocer el tamaño del array que debes recorrer.</p>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Email</th>
        </tr>
        <?php
            foreach($agenda as $estudiante){
                echo "<tr>";
                echo "<td>" . $estudiante["nombre"] . "</td>";
                echo "<td>" . $estudiante["apellidos"] . "</td>";
                echo "<td>" . $estudiante["telefono"] . "</td>";
                echo "<td>" . $estudiante["email"] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>   
</body>
</html>