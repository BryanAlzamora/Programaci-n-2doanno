let params= new URLSearchParams(location.search);
let dni= params.get('dni');
let arrayListadoEmpleados=JSON.parse(localStorage.getItem('arrayListadoEmpleados')) || [] ;
let empleado= arrayListadoEmpleados.find(e=> e.dni === dni);

if(empleado){
    document.getElementById('dni').textContent=empleado.dni;
    document.getElementById('nombre').textContent=empleado.nombre;
    document.getElementById('apellidos').textContent=empleado.apellidos;
    document.getElementById('edad').textContent=empleado.edad;
    document.getElementById('fecha').textContent=empleado.fecha;
    document.getElementById('email').textContent=empleado.email;
    document.getElementById('genero').textContent=empleado.genero;
    document.getElementById('cv').textContent=empleado.cv;
}else{
    let datosEmpleados=document.getElementById('datosEmpleados');
    datosEmpleados.innerHTML=' ERROR ';
}