<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>
        <h1>Ejercicio 5 con Sesiones</h1>
        <p>. Desarrolla una página de login con un formulario compuesto por los campos de usuario
            y contraseña. La aplicación no dejará continuar hasta que se inicie sesión con un nombre de
            usuario y contraseña correctos (a comprobar contra un array asociativo). Una vez el usuario
            haya accedido correctamente, en lugar del formulario de acceso la aplicación mostrará un
            mensaje de bienvenida y un enlace para cerrar sesión. Al hacer click en el enlace para cerrar
            sesión, la aplicación destruirá información de la sesión almacenada.</p>
    
        <h2>Introduzca los datos de sesion</h2>
        <form action="ejercicio5.php" method="POST">
            <label>Usuario: </label><input type="text" name="user">
            <label>Contraseña: </label><input type="text" name="pwd">
            <input type="submit" value="Entrar">
        </form>    
        </body>
</html>