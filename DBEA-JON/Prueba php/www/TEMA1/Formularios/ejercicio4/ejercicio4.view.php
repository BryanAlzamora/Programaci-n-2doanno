<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio con view</title>
    </head>
    <body>
        <p>
            04. Crea una pantalla de login con dos campos:
            usuario y contraseña. El programa deberá
            validar los datos de acceso contra un diccionario
            de datos como el de la imagen. El programa
            deberá mostrar un mensaje de bienvenida con
            su nombre y apellidos en caso de que los datos
            sean correctos.
            También indicará si el usuario introducido no
            existe o si la contraseña introducida es
            incorrecta.
        </p>
        
        <form action="ejercicio4.php" method="post">
        <h1>LOGIN</h1>
        Usuario: <input type="text" name="user" value=<?= $user?>> <br><br>
        Contraseña: <input type="text" name="pwd" value=<?= $pwd?>> <br><br>
        
        <input type="submit" value="Enviar">
        
        </form>
        <?=$resultado?>
    </body>
</html>