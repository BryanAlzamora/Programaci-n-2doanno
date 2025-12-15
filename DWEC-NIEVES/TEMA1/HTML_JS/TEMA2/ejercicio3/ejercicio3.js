
let bEnviar=document.getElementById("enviar");
let bBorrar=document.getElementById("borrar");
 
bEnviar.addEventListener("click",function(e){
    e.preventDefault();//Uso esta funcion para que al presionar no se recargue la pagina y valide
    validarCampos();
});
bBorrar.addEventListener("click",function(e){
    e.preventDefault();
    borrarFormulario();
});

function validarCampos(){
    try{
        let nombre=document.getElementById("nombre").value;
        let apellidos=document.getElementById("apellidos").value;
        let correo=document.getElementById("correo").value;
        let poblacion=document.getElementById("poblacion").value;
        let provincia=document.getElementById("provincia").value;

        let edad=edadSeleccionada();

        let contacto=contactoSeleccionado();


        if(!nombre||!apellidos||!correo||!poblacion||!provincia){
            throw "Los campos no pueden estar vacios";
        }
        expRegCorreo(correo);
        expRegular(nombre);
        expRegular(apellidos);
        expRegular(poblacion);
        expRegular(provincia);

        
        if(!edad){
            throw "Seleccione una edad";
        }
        if(contacto.length===0){
            throw "Seleccione al menos una opción de como nos ha conocido";
        }
        mostrarDatos(nombre,apellidos,correo,poblacion,provincia,edad,contacto);
    }catch(e){
        alert(e);
    }
}

function edadSeleccionada(){
    let edad=document.getElementsByName("edad");
    for(let i=0;i<edad.length;i++){
        if(edad[i].checked){
            return edad[i].value;
        }
    }
    return null;
}
function contactoSeleccionado(){
    let contacto=document.getElementsByName("contacto");
    //creo un array para las difrentes respuestas del checkbox
    let arrayContacto=[];
    for(let i=0;i<contacto.length;i++){
        if(contacto[i].checked){
            //por cada checkbox marcado, returneo agregando el valor seleccionado al array
            arrayContacto.push(contacto[i].value);
        }
    }
    return arrayContacto;
}



function mostrarDatos(nombre,apellidos,correo,poblacion,provincia,edad,contacto){
    alert("Los datos introducidos son: {"+nombre+", "+
        apellidos+", "+
        correo+", "+
        poblacion+", "+
        provincia+", "+
        edad+", "+
        contacto.join(", ")+"}")
}

function expRegular(dato){
    const expRegular= /^[A-Z][a-z]{2,20}$/;
    if(!expRegular.test(dato)){
        throw "El campo no tiene un formato valido"
    }
}
function expRegCorreo(correo){
    const expRegular=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if(!expRegular.test(correo)){
        throw "El correo no tiene un formato valido";
    }
}

//Funcion para borrar los datos
function borrarFormulario(){
    const campos=["nombre","apellidos","correo","poblacion","provincia"];
    campos.forEach(id=>document.getElementById(id).value="");

    const edad=document.getElementsByName("edad");
    edad.forEach(radio=>radio.checked =false);

    const contacto=document.getElementsByName("contacto");
    contacto.forEach(check=>check.checked=false);
}
