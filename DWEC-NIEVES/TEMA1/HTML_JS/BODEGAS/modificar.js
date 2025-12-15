"use strict";

let params = new URLSearchParams(location.search);
let dni = params.get('dni');
let arrayListadoEmpleados = JSON.parse(localStorage.getItem('arrayListadoEmpleados')) || [];
let empleado = arrayListadoEmpleados.find(e => e.dni === dni);

if (empleado) {

    document.getElementById('formulario').addEventListener('submit', async (e) => {
        e.preventDefault();

        const nuevosDatos = {
            nombre: document.getElementById('nombre').value,
            apellidos: document.getElementById('apellidos').value,
            genero: document.getElementById('genero').value,
            cv: document.getElementById('cv').value
        };

        try {
            const res = await axios.post("https://jsonplaceholder.typicode.com/posts", nuevosDatos);
            console.log("Respuesta del servidor: ", res.data);

            // Actualizar datos locales
            empleado.nombre = nuevosDatos.nombre;
            empleado.apellidos = nuevosDatos.apellidos;
            empleado.genero = nuevosDatos.genero;
            empleado.cv = nuevosDatos.cv;

            localStorage.setItem("arrayListadoEmpleados", JSON.stringify(arrayListadoEmpleados));

            alert("Empleado modificado correctamente");
        } catch (e) {
            alert("Error al modificar empleado");
            console.error(e);
        }
    });
} else {
    alert("Empleado no encontrado");
}
