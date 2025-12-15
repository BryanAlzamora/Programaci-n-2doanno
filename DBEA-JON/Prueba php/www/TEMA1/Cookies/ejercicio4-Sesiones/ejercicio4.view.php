<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h1>Ejercicio 4 de Sesiones</h1>
        <p>Crea una aplicación de control de asistencia
            para un evento. La aplicación tendrá que mostrar la
            lista de personas (el nombre de cada una) que han
            acudido al evento. Tendrá un campo de texto para
            escribir el nombre de la persona y así añadir
            personas a la lista. La lista se almacenará en sesión,
            y existirá un botón que borre la lista completa.</p>
    
        <h2>Lista de asistentes</h2>
        <ul>
            <?php foreach($personas as $persona) : ?>
                <li><?= $persona ?></li>
            <?php endforeach; ?>
        </ul>

        <form action="ejercicio4.php" method="POST">
            <h3>Añadir asistente</h3>
            <input type="text" name="persona"><input type="submit" value="Enviar">
        </form>

        <a href="ejercicio4.php?vaciar=vaciar">Vaciar lista</a>
        </body>
</html>