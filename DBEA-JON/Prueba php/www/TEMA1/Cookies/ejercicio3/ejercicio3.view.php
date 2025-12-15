<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 3 con Cookies</title>
    </head>
    <body>
        <h1>Ejercicio3</h1>
        <p> Crea una página que tenga un select con dos opciones: “Euskera” y “Castellano”. La
        aplicación guardará el valor indicado en una cookie de nombre “idioma” (tendrá 1 minuto de
        duración) y mostrará el último valor almacenado siempre que la cookie contenga algún
        valor.</p>

        <label>Idioma: </label><?= $idioma?><br>


        <form action="ejercicio3.php" method="post">
            <label>Elige tu idioma </label>
            <select name="idioma">
                <option value="Euskera">Euskera</option>
                <option value="Castellano">Castellano</option>
            </select>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>