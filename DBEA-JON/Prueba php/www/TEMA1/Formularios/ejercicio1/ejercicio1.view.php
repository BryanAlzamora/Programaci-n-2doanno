<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Bienvenido al Ejercicio 1</h1>
    <p>Crea un convertidor de grados Celsius a Farenheit (y viceversa). La aplicación
pedirá una cantidad al usuario y la unidad mediante un formulario. Una vez enviado,
mostrará el resultado de la conversión realizada. El formulario siempre se mostrará,
de forma que el usuario pueda seguir introduciendo valores.</p>


<?php if ($resultado !== ''): ?>
<p>Resultado de la conversión(<?= $temp?>º <?= $unidad?>)= <?= round($resultado,2) ?></p>
<?php endif; ?>
<form action="ejercicio1.php" method="post">
    Introduce la temperatura: <input type="text" name="temp" value=<?= $temp?>>
    <br>
    Indica la unidad de la temperatura introducida
    <select name="unidad">
        <option value="celsius" <?= $unidad=="celsius"?>>Celsius</option>
        <option value="far"<?= $unidad=="Far"?>>Farenheit</option>
    </select><br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>