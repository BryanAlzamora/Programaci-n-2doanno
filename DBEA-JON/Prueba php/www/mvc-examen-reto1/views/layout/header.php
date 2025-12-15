<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneos - MVC</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header>
    <div class="container">
        <h1>
            <a href="index.php">
                <!-- Mostrar título según idioma en cookie -->
                <?php if ($idioma === 'es'): ?>
                    <?= 'Torneos' ?>
                <?php else: ?>
                    <?= 'Txapelketak' ?>
                <?php endif; ?>
            </a>
        </h1>
        <nav>
            <ul>
                <?php if ($isLoggedIn): ?>
                    <li>Bienvenido, <?= $currentUser['nombre'] ?></li>
                    <li><a href="index.php?controller=AuthController&accion=logout">Cerrar sesión</a></li>
                <?php else: ?>
                    <li><a href="index.php?controller=AuthController&accion=login">Iniciar sesión</a></li>
                    <li><a href="index.php?controller=AuthController&accion=register">Registro</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>
<main class="container">
