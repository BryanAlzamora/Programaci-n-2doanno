<?php // form register ?>
<div>
    <h2>Registro de usuario</h2>
    <form action="index.php?controller=AuthController&accion=store" method="post">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="confirm_password">Confirmar contraseña</label>
            <input type="password" name="confirm_password" id="confirm_password" required>
        </div>
        <button type="submit">Registrarse</button>
    </form>
</div>