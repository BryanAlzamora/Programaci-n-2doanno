<!DOCTYPE>
<html>
<head>
    <title>Ejercicios con bucle</title>
</head>
<body>
    <p>28. Modifica el ejercicio número 26 para obtener el mismo resultado empleando
    una estructura foreach.</p>
    <ul>
    <?php
      
        foreach($marcas as $marca){
            echo "<li>" . $marca . "</li>";
        }
    ?>
    </ul>
</body>
</html>