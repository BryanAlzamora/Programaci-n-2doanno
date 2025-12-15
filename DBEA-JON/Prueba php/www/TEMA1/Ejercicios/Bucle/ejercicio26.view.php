<!DOCTYPE>
<html>
<head>
    <title>Ejercicios con bucle</title>
</head>
<body>
    <p>26. Crea un array con marcas de coches y una función que imprima por pantalla
una lista con todos los nombres utilizando la sentencia do-while.</p>
    <ul>
    <?php
        $total=count($marcas);
        $i=0;
        do{
            echo "<li>" . $marcas[$i] . "</li>";
            $i++;
        }while($i<$total);
    ?>
    </ul>
</body>
</html>