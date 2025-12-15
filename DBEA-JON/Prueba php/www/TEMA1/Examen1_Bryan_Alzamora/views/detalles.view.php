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
            <div clas="detallesTorneos">
                <form action="index.php?controller=TorneoController&accion=getById&id=<?$torneo->'id'?>" method="GET">
                <ul>
                    
                        <li>Nombre:<?=$torneo->titulo ?></li>
                        <li>juego:<?=$torneo->juego ?></li>
                        <li>fecha:<?=$torneo->fecha?></li>
                        <li>plazas:<?=$torneo->plazas?></li>
                        <li>estado:<?=$torneo->estado?></li>                        
                        <li>descripcion:<?=$torneo->descripcion?></li>
                </ul>
                </form>  
            </div>          
            
        </div>
    </main>

<?php
    require_once __DIR__ . '../layout/footer.php';
?>