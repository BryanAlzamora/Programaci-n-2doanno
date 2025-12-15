<?php // Listado de torneos ?>
<div>
    <div>
        <h2>Torneos disponibles</h2>
        <?php if ($isLoggedIn): ?>
            <a href="index.php?controller=TorneoController&accion=create" class="btn btn-success">Crear torneo</a>
        <?php endif; ?>
    </div>
    
    <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Juego</th>
                    <th>Fecha</th>
                    <th>Plazas</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($torneos as $t): ?>
                    <tr>
                        <td><?= $t->titulo ?></td>
                        <td><?= $t->juego ?></td>
                        <td><?= $t->fecha ?></td>
                        <td><?= $t->plazas_totales ?></td>
                        <td>
                            <?php if ($t->estado === 'abierto'): ?>
                                <span>Abierto</span>
                            <?php else: ?>
                                <span>Cerrado</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="index.php?controller=TorneoController&accion=show&id=<?= $t->id ?>" class="btn">Ver más</a>
                            
                            <?php if ($isLoggedIn): ?>
                                <!-- Cambiar estado -->
                                <?php if ($t->estado === 'abierto'): ?>
                                    <a href="index.php?controller=TorneoController&accion=cambiarEstado&id=<?= $t->id ?>" class="btn btn-warning" title="Cerrar torneo">Cerrar</a>
                                <?php else: ?>
                                    <a href="index.php?controller=TorneoController&accion=cambiarEstado&id=<?= $t->id ?>" class="btn btn-success" title="Abrir torneo">Abrir</a>
                                <?php endif; ?>
                                
                                <!-- Eliminar -->
                                <a href="index.php?controller=TorneoController&accion=delete&id=<?= $t->id ?>" class="btn btn-danger" title="Eliminar torneo">Eliminar</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>