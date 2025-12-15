<!DOCTYPE html>
<html>
    <head>
        <title>Tienda</title>
    </head>
    <body>
        <h1>Tienda online</h1>
<h2>Compra realizada correctamente</h2>
<h3>Precio total:</h3>
<p>
    El importe total de la compra realizado es de <?= calcularCompra($productos) ?> euros.
</p>
<h3>Detalle de la compra</h3>

<ul>
<?php foreach ($productos as $key => $producto): ?>
    <?php if (isset($_GET[$key]) &&  $_GET[$key] > 0): ?>
        <li><?= $producto['nombre'] ?> (<?=$_GET[$key]?>)</li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>
    </body>
</html>