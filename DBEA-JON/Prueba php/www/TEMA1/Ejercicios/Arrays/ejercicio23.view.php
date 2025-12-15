<!DOCTYPE>
<html>
<hedad>
    <title>Ejercicio Array</title>
</hedad>

<body>
    <h1>Ejercicio Array usando view</h1>
    <p>23. Crea un array con un listado de estudiantes (Ane, Markel, Nora, Danel, Amaia, Izaro). A
    continuación recorre el array mediante un FOR, generando una lista HTML como la siguiente:
    </p>
 
        <ul>
            <?php 
            $total=count($estudiantes);
            for($i=0;$i<$total;$i++){
                    echo "<li id='" . ($i+1)."'>" . $estudiantes[$i] . "</li>";
                }
            ?>         
        </ul>
</body>
</html>