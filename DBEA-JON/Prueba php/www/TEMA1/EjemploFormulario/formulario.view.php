<!DOCTYPE html>
<html>
<head>
    <title>Lista de Alumnos</title>
</head>
<body>
    <h1>Alumnos registrados</h1>
    <ul>
        <?php foreach ($alumnos as $alumno): ?>
            <li>
                <?= $alumno->nombre ?> <?= $alumno->apellidos ?>(<?= $alumno->email ?>)
                — <a href="enviar-correo.php?id=<?= $alumno->id ?>">Enviar datos por correo</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
