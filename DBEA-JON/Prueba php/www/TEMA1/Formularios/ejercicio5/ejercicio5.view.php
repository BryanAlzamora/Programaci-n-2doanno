<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicios con view</title>
    </head>
    <body>
        <p>
            . Desarrolla una tienda online con un catálogo de productos y un carrito de la compra.
            Cada producto tendrá la siguiente información: nombre, descripción y precio (puedes
            almacenar otra información extra que te sirva de ayuda, como un ID). Se podrán adquirir
            tantas unidades de cada producto como se desee (también podrá eliminarse un producto
            añadido o una unidad del mismo).
            La aplicación mostrará un formulario en el que indicar la cantidad de cada producto. Al
            hacer click en “Enviar” la aplicación le llevará al usuario a otra página donde únicamente
            mostrará el valor total de la compra realizara y un enlace para volver a la página anterior.
        </p>
        <h1>Catalago de productos</h1>
        <form action="ejercicio5_resultado.php" method="get">
        <table class="tabla-productos" border=1>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
            <?php foreach($productos as $key=>$producto): ?>
                <tr>
                <td><?= $producto['nombre'] ?></td>
                <td><?= $producto['descripcion'] ?></td>
                <td><?= $producto['precio'] ?></td>
                <td><input type="number" name="<?= $key ?>" value="0" required></td>
                </tr>
            <?php endforeach; ?>
        <br><br>
        </table>
        <input type="submit" value="Enviar" >
        </form>
    </body>
</html>