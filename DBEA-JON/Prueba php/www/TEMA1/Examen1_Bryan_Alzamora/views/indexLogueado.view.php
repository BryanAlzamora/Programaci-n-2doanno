<?php
require_once __DIR__ . '../layout/header.php';
?>
    <header>
        <div class="container">
            <h1>
                <!-- Aquí se deberá mostrar el título según el idioma en cookie -->
                <a href="index.php?controller=TorneoController&accion=index"><?= $tituloHeader?></a>
            </h1>
            <nav>
                <!-- Insertar aquí una lista con dos elementos en función de si el usuario está autenticado -->
            </nav>
        </div>
    </header>
    <main class="container">
        <div>
            <div>
                <h2>Torneos disponibles</h2>
            <!-- Insertar aquí el botón para crear un torneo -->
            </div>

            <!-- Insertar aquí la tabla con el listado de torneos -->
            <div clas="listadoTorneosCss">
                <ul name="listaTorneos">
                    <?php foreach($listaTorneos as $torneo) : ?>
                        <li>Nombre:<?=$torneo['titulo'] ?></li>
                        <li>juego:<?=$torneo['juego'] ?></li>
                        <li>fecha:<?=$torneo['fecha'] ?></li>
                        <li>plazas:<?=$torneo['plazas_totales'] ?></li>
                        <li>estado:<?=$torneo['estado'] ?></li>
                        <li>Acciones: <a href="index.php?controller=TorneoController&accion=getById&id=<?= $torneo['id']?>">Ver mas</a></li>
                        --------------------------------------------
                        
                    <?php endforeach;?>
                </ul>
            </div>

            
        </div>
    </main>

<?php
    require_once __DIR__ . '../layout/footer.php';
?>