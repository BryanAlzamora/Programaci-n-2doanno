<?php // form login ?>
<div>
    <h2>Iniciar sesión</h2>
    <form action="index.php?controller=AuthController&accion=authenticate" method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Entrar</button>
    </form>
</div>