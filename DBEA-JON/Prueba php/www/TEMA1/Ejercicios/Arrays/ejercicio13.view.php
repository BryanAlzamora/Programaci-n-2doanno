<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio Arrays</title>
    </head>
    <body>
        <h1>Ejercicio Arrays usando view</h1>
        <div>
            <h2>Animales</h2>
            <?php echo "Los animales son: " ;
             foreach($animales as $animal) {
                 echo $animal . " ";
             }
            ?>

            <h2>Colores</h2>
            <?php echo "Los colores son: ";
             foreach($colores as $color) {
                 echo $color . " ";
             }  
             ?>

            <h2>Unión de arrays</h2>
            <?php echo "Todos juntos: ";
             foreach($union as $item) {
                 echo $item . " ";
             }
            ?>
    </body>
</html>
