<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <h1>Iniciar sesión</h1>
        <div class="formIngresar">
            <form action="index.php?controller=SesionController&accion=index" method="POST">
                <label>USUARIO: <input type="text" name="user"></label>
                <label>CONTRASEÑA: <input type="text" name="pwd"></label>
                <input type="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>
</html>