<?php // Crear torneo ?>
<div>
    <h2>Crear nuevo torneo</h2>
    <form action="index.php?controller=TorneoController&accion=store" method="post">
        <div>
            <label>Título</label>
            <input type="text" name="titulo" required>
        </div>
        <div>
            <label>Juego</label>
            <input type="text" name="juego" required>
        </div>
        <div>
            <label>Fecha</label>
            <input type="date" name="fecha" required>
        </div>
        <div>
            <label>Plazas totales</label>
            <input type="number" name="plazas_totales" min="2" max="100" required>
        </div>
        <div>
            <label>Descripción</label>
            <textarea name="descripcion"></textarea>
        </div>
        <button type="submit">Crear</button>
        <a href="index.php" class="btn">Volver</a>
    </form>
</div>