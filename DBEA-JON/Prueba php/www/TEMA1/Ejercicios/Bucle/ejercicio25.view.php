<!DOCTYPE>
<html>
<head>
    <title>Ejercicios con bucle</title>
</head>
<body>
    <p>25. Crea un array con un listado de estudiantes (Ane, Markel, Nora, Danel, Amaia, Izaro). A
continuación recorre el array utilizando una estructura de control WHILE generando una lista
HTML como la siguiente:</p>
    <ul>
    <?php
    $i=0;
    $total=count($estudiantes);
    
    while($i<$total){
        echo "<li>" . $estudiantes[$i] . "</li>";
        $i++;
    }
    ?>
    </ul>

</body>
</html>