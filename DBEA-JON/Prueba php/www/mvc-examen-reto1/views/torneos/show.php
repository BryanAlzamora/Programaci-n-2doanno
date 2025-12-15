<?php // Detalle de torneo ?>
<div>
    <h2><?= $torneo->titulo ?></h2>
    
    <div>
        <p><strong>Juego:</strong> <?= $torneo->juego ?></p>
        <p><strong>Fecha:</strong> <?= $torneo->fecha ?></p>
        <p><strong>Plazas totales:</strong> <?= $torneo->plazas_totales ?></p>
        <p><strong>Estado:</strong> 
            <?php if ($torneo->estado === 'abierto'): ?>
                <span>Abierto</span>
            <?php else: ?>
                <span>Cerrado</span>
            <?php endif; ?>
        </p>
        
        <?php if (!empty($torneo->descripcion)): ?>
            <p><strong>Descripción:</strong></p>
            <p><?= nl2br($torneo->descripcion) ?></p>
        <?php endif; ?>
    </div>
    
    <div>
        <a href="index.php" class="btn btn-secondary">Volver al listado</a>
        
        <?php if ($isLoggedIn): ?>
            <!-- Cambiar estado -->
            <?php if ($torneo->estado === 'abierto'): ?>
                <a href="index.php?controller=TorneoController&accion=cambiarEstado&id=<?= $torneo->id ?>" class="btn btn-warning">Cerrar torneo</a>
            <?php else: ?>
                <a href="index.php?controller=TorneoController&accion=cambiarEstado&id=<?= $torneo->id ?>" class="btn btn-success">Abrir torneo</a>
            <?php endif; ?>
            
            <!-- Eliminar -->
            <a href="index.php?controller=TorneoController&accion=delete&id=<?= $torneo->id ?>" class="btn btn-danger">Eliminar torneo</a>
        <?php endif; ?>
    </div>
</div>