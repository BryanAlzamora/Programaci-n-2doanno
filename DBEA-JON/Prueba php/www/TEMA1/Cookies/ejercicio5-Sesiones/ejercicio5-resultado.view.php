<!DOCTYPE html>
<html>
    <body>
        <form action="ejercicio5.php" method="POST">

            <h1>Has iniciado sesion con exito</h1>
            <p>Hola <?= $usuarioIniciado ?></p>
            <input type="submit" name="cerrar" value="Cerrar sesión">
            
        </form>    
    </body>
</html>