<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio1</title>
    </head>
    <body>
        <h1><strong>Lista de compra</strong></h1>
            <ul>
            <?php foreach($listaProductos as $producto) : ?>
                <li>
                    <?= $producto->nombre ?> (<a href="ejercicio1.php?accion=deleteById&id=<?= $producto->id ?>">Eliminar</a>)
                </li>
            <?php endforeach;?>
            </ul>
        <h2><strong>Añadir elemento</strong></h2>
        <form action="ejercicio1.php" method="post">
        <input type="hidden" name="accion" value="insertar">
        <input type="text" name="producto"><input type="submit" name="bAnnadir" value="Añadir">
        <br>
        </form>
        <a href="ejercicio1.php?accion=vaciar">Vaciar lista</a>
    </body>
</html>