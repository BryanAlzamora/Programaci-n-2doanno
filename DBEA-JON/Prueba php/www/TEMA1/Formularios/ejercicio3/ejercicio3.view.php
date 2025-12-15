<!DOCTYPE html>
<html>
    <head>
        <title>
            Ejercicios con view
        </title>
    </head>
    <body>
        <h1>Ejercicio 3 con formulario</h1>

        <p>03. Crea un formulario de contacto para una empresa ficticia que permita a un
            visitante enviar sus dudas o comentarios. El formulario debe tener los siguientes
            campos: Asunto, Email, Motivo (desplegable con varias opciones: "Soporte técnico",
            "Información de productos", "Queja", "Otro"), Mensaje (textarea para texto largo).
            El formulario debe enviarse con el método POST a un archivo PHP. Al recibir los
            datos, ese PHP debe mostrar un mensaje de confirmación con los datos enviados.
            Validar que los campos obligatorios no estén vacíos mediante el método empty(). </p>
        
        <form action="ejercicio3.php" method="POST">
            <h2>Solucion: </h2>
            <?= $resultado ?>
            <br><br>

            <p>
                Asunto:
               <input type="text" name="asunto" value=<?= $asunto ?>><br><br>

               Nombre:
               <input type="text" name="nombre" value=<?=$nombre?>><br><br>

               Email:
               <input type="text" name="email" value=<?=$email?>><br><br>

                Motivo:
                <select name="motivo">
                     <option value="soptec" <?= $motivo=="soptec" ?>>Soporte técnico</option>
                     <option value="infpro" <?= $motivo=="infpro" ?>>Información de productos</option>
                     <option value="queja"  <?= $motivo=="queja"?>>Queja</option>
                     <option value="otro"   <?= $motivo=="otro"?>>Otro</option>
                </select><br><br>

                Mensaje:
                <textarea name="mensaje"><?=$mensaje?></textarea>
                <br><br>

                <input type="submit" value="Enviar">
            </p>

        </form>
    </body>
</html>