<?php
require_once __DIR__ . '../layout/header.php';
?>
    <header>
        <div class="container">
            <h1>
                <!-- Aquí se deberá mostrar el título según el idioma en cookie -->
                <a href="index.php">Torneos</a>
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
                
            </div>

            
        </div>

    </main>

<?php
    require_once __DIR__ . '../layout/footer.php';
?>