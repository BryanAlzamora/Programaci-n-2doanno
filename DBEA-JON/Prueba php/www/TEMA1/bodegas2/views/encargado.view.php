<?php require_once __DIR__ . '/layout/head.php'; ?>


    <main>
        <h2>Lista de empleados</h2>
        <div class="contenedor">
            <div class="izquierda">

                <form action="index.php?controller=EncargadoController&accion=idiomaCookie" method="POST">
                    <select name="idioma">
                        <option value="No has seleccionado ninguno"checked>Escoga...</option>
                        <option value="espanol">Español</option>
                        <option value="ingles">Inglés</option>
                    </select>
                <input type="submit" value="Enviar">
                </form>
                <form action="index.php?controller=EncargadoController&accion=borrarCookie" method="POST">
                    <input type="submit"  name="bCookie" value="Borrar cookie">
                </form>
                <p>Idioma:<?= $idiomaSeleccionado= $_COOKIE['idioma']?> </p>

            
            </div>
            <div class="derecha">
                <h3>Añadir nuevo empleado</h3>
                <form method="POST" action="index.php?controller=EncargadoController&accion=annadirEmpleado">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type ="text" name="apellido"  placeholder="Apellidos">
                    <input type="text" name="edad" placeholder="Edad">
                    <input type="text" name="cumpleanos"  value="01/01/2000">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="dni" placeholder="DNI">
                    <select name="sexo">
                        <option value="mujer">Mujer</option>
                        <option value="hombre">Hombre</option>
                    </select>

                    <textarea name="cv" placeholder="Curriculum"></textarea>
                    <input type="submit" value="Anadir">
                </form>
                </div>
                <div class="verEmpleados">
                    <ul>
                        <?php if(!empty($listaEmpleados)): ?>
                            <?php foreach($listaEmpleados as $empleado): ?>
                                <li><?= $empleado['NOMBRE'] ?> <?= $empleado['APELLIDO'] ?>
                                <a href="index.php?controller=EncargadoController&accion=validarModificar&dni=<?=$empleado['DNI']?>">Modificar</a>
                                <a href="index.php?controller=EncargadoController&accion=eliminarEmpleado&dni=<?=$empleado['DNI']?>"> Eliminar</a>
                            </li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No hay empleados</p>
                        <?php endif; ?>  
                    </ul>
                </div>
        </div>
    </main>
 
<?php require_once __DIR__ . '/layout/footer.php'; ?>