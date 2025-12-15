let usuarios=[
    {
        nombre:"Pedro",
        apellido:"Mendez",
        password:"123"
    },
    {
        nombre:"Juan",
        apellido:"Martinez",
        password:"321"
    }
]

document.getElementById("bAceptar").addEventListener("click",validarDatos);


function validarDatos(){
try{
    let vNombre=document.getElementById("nombre").value;
    let vPwd=document.getElementById("password").value;
    
    //if para lanzar un alert si esta vacio
    if(vNombre=='' && vPwd==''){
        throw "Campos vacios";
    }

    //Uso la función para el formato del usuario
    validarUser(vNombre);
    let usuarioEncontrado=usuarios.find(user=>user.nombre===vNombre);

    if(!usuarioEncontrado){
        throw "Usuario incorrecto";
    }
    if(usuarioEncontrado.password===vPwd){
        alert ("Bienvenido "+ usuarioEncontrado.apellido);
    }else{
        throw "Contraseña incorrecta";
    }
}catch(e){
    alert(e);
}
}

function validarUser(user){
    const expRegular= /^[A-Z][a-z]{2,6}$/;
    if(!expRegular.test(user)){
        throw "El usuario no tiene un formato adecuado";
    }
}