</main>
<footer>
	<div class="container">
		<p>&copy; Torneos - 2025</p>
		<form method="post" action="index.php?controller=IdiomaController&accion=cambiar">
			<label>Idioma:</label>
			<select name="idioma" class="select-inline">
				<option value="es" <?= $idioma === 'es' ? 'selected' : '' ?>>Castellano</option>
                <option value="eu" <?= $idioma === 'eu' ? 'selected' : '' ?>>Euskera</option>
            
			</select>
			<button type="submit" class="btn">Cambiar</button>
		</form>
	</div>
</footer>
</body>
</html>