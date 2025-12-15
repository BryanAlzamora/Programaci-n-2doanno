<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio Arrays</title>
    </head>
    <body>
        <h1>Ejercicio Arrays usando view</h1>
        <div>
            <h2>Traducción de palabras</h2>
            <?php 
             foreach($palabras as $espanol => $ingles) {
                 echo "La palabra $espanol se traduce como $ingles <br>";
             }
            ?>
        </div>
    </body>
</html>