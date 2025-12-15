<?php require_once __DIR__ . '/../layout/head.php'; ?>


    <main>
        <h2>Lista de empleados</h2>
        <div class="contenedor">
            <div class="izquierda">
                <table>
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody id="listaEmpleados">
                        <!-- Aquí JS añadirá filas dinámicamente -->
                    </tbody>
                </table>

                <label>* Opción secreta: <a href="#" id="vaciar">Vaciar lista</a></label>
            </div>
            <div class="derecha">
                <h3>Añadir nuevo empleado</h3>
                <div class="formulario">
                    <input type="text" name="nombre" id="tNombre" placeholder="Nombre">
                    <input type ="text" name="apellidos" id="tApellidos" placeholder="Apellidos">
                    <input type="text" name="edad" id="tEdad" placeholder="Edad">
                    <input type="text" name="fecha" id="tFecha" value="01/01/2000">
                    <input type="text" name="email" id="tEmail" placeholder="Email">
                    <input type="text" name="dni" id="tDni" placeholder="DNI">
                    <select id="genero">
                        <option value="mujer">Mujer</option>
                        <option value="hombre">Hombre</option>
                    </select>

                    <textarea id="cv" placeholder="Curriculum"></textarea>
                    <button id="annadir">Añadir</button>
                </div>
            </div>
        </div>
    </main>
 
<?php require_once __DIR__ . '/../layout/footer.php'; ?>