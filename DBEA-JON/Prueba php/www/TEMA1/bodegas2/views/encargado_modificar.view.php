


<form action="index.php?controller=EncargadoController&accion=modificarEmpleado&dni=<?= $empleado->dni?>" method="POST">
<p>Nuevo nombre</p><input type="text" name="nombre" placeholder="<?=$empleado->nombre ?>">
<p>Nuevo apellido</p><input type="text" name="apellido" placeholder="<?= $empleado->apellido?>">

<input type="submit" value="Aceptar">
</form>