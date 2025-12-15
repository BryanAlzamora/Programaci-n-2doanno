let arrayListadoEmpleados=JSON.parse(localStorage.getItem('arrayListadoEmpleados')) || [];
let listaEmpleados=document.getElementById('listaEmpleados');

document.getElementById('annadir').addEventListener('click',agregarEmpleado);
document.getElementById('vaciar').addEventListener('click',eliminarAll);

function agregarEmpleado(){
    let nombre=document.getElementById('tNombre').value;
    let apellidos=document.getElementById('tApellidos').value;
    let edad=document.getElementById('tEdad').value;
    let fecha=document.getElementById('tFecha').value;
    let email=document.getElementById('tEmail').value;
    let dni=document.getElementById('tDni').value;
    let genero=document.getElementById('genero').value;
    let cv=document.getElementById('cv').value;

        try{
            if(validarMayuscula(nombre) && validarMayuscula(apellidos) && validarDni(dni) && validarFecha(fecha)){
                let datos={nombre,apellidos,edad,fecha,email,dni,genero,cv};
                arrayListadoEmpleados.push(datos);
                localStorage.setItem('arrayListadoEmpleados',JSON.stringify(arrayListadoEmpleados));
                
            }

            mostrarTodos();
        }catch(e){
            alert(e);
        }
}

function eliminarAll(){
    arrayListadoEmpleados=[];
    localStorage.removeItem('arrayListadoEmpleados');
    listaEmpleados.innerHTML="";
}
function mostrarTodos(){
    listaEmpleados.innerHTML="";

    arrayListadoEmpleados.forEach(empleado =>{
    let fila=document.createElement('tr');

    fila.innerHTML=`
        <td>${empleado.dni}</td>
        <td>${empleado.nombre}</td>       
        <td>${empleado.apellidos}</td>
        <td><a href="detalles.html?dni=${empleado.dni}">Ver más</a></td>
        <td><a href="modificar.html?dni=${empleado.dni}">Modificar</a></td>
    `;
    listaEmpleados.appendChild(fila);
})
}

function validarMayuscula(dato){
    const expRegular=/^[A-Z][a-z]+$/;
    if(!expRegular.test(dato)){
        throw 'Algún dato no ha comenzado con Mayúscula';
    }
    return true;
}

function validarDni(dni){
    const expRegular=/^[0-9]{8}[A-Z]/;
    if(!expRegular.test(dni)){
        throw 'El dni no tiene un formato adecuado';
    }
    return true;
}

function validarFecha(fecha){
    return !isNaN(Date.parse(fecha));
}

mostrarTodos();
