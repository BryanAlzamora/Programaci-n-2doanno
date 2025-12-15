<!DOCTYPE>
<html>
    <head>
        <title>Ejercicio Array</title>
    </head>
    <body>
        <h1>Ejercicio Array usando view</h1>
        <p>
            Crea un array con nombres de países y a continuación una función que reciba
            el nombre de un país y recorra el array, comprobando valor por valor si alguno de
            ellos es igual al del parámetro recibido. Devolverá la posición en la que se
            encuentre (en caso de no encontrarlo devolverá -1)..
            [“Brasil”, “Portugal”, “Islandia”, “Mexico”, “Filipinas”, “Marruecos”]
            encontrarPosicion(“Islandia”) → 3
            encontrarPosicion(“Dinamarca”) → -1
            Nota: Puedes utilizar la función count() para conocer el tamaño del array que debes recorrer.
        </p>
        <p>
           El país a buscar es: <?= $pais?> y se encuentra en la posición: <?= encontrarPosicion($paises,$pais) ?>
    </body>
</html>