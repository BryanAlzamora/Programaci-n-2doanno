<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio Arrays</title>
    </head>
    <body>
        <h1>Ejercicio Arrays usando view</h1>
        <div>
            <p>El array de las ciudades es: <?= implode(", ", $ciudades); ?></p>
            
            <p>La posición que has escogido es: <?= $getPos; ?> 
               y el valor original en esa posición era: <?= $valorOriginal; ?></p>
            
            <p>El nuevo valor que has puesto en la posición <?= $getPos; ?> es: <?= $nuevoValor; ?></p>
        </div>
    </body>
</html>

/*
Para probarlo:
http://localhost/Ejercicios/Arrays/ejercicio12.php?pos=2&valor=Roma
*/
