<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio2</title>
    </head>
    <body>
        <p>
            Crea una aplicación que simule una
calculadora. La calculadora estará
representada por un formulario con dos
campos numéricos y un desplegable
para indicar la operación que se desea
realizar (suma, resta, multiplicación o
división). La aplicación deberá mostrar el
resultado de la operación realizada y
mostrar un mensaje de error cuando se
intente dividir entre cero
        </p>

    <h1>Calculado</h1>
<div>
    Ultimo resultado: <?= $resultado?>
    <form action="ejercicio2.php" method="post">
    Primer número:<input type="text" name="var1" value=<?= $var1?>>
    Segundo múmero:<input type="text" name="var2" value=<?= $var2?>>
    Seleccione la operación deseada:
    <select name="operacion">
        <option value="suma" <?= $operacion == "suma"?>>Suma</option>
        <option value="resta"<?= $operacion == "resta"?>>Resta</option>
        <option value="multi" <?=$operacion== "multi"?>>Multiplicacion</option>
        <option value="division" <?= $operacion == "division"?>>Division</option>
    </select>
    <br>
    <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>