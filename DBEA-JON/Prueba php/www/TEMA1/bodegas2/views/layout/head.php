<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio MVC</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container"><!-- Contenedor principal -->
    <div class="t">
        <h4>Bienvenido <?= $user['nombre']?></h4>
        <p>Tu rol es: <?= $rol?></p>
    </div>
</div>