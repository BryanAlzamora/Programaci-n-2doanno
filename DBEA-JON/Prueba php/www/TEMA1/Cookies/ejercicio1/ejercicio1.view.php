<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio1</title>
    </head>
    <body>
        <h1>Ejercicio con cookies</h1>
        <div>
            <p>1. El cliente solicita una página al servidor</p>
        
            <p>Hola <?= $usuario?></p>

            <form action="ejercicio1.php" method="post">
                <label>Introduce tu nombre:</label>
                <input type="text" name="usuario">
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>