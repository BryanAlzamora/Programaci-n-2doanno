let anotaciones=[]; // almacena las anotaciones por día

let calendario=document.getElementById("calendario");
let btnVisualizar=document.getElementById("visualizar");
let btnInicializar=document.getElementById("inicializar");
let texto=document.getElementById("texto");

let diaSeleccionado= null; //Variable para guardar el día seleccionado

function inicializarCalendario(){
    //Limpiar antes de inicializar los botones
    calendario.innerHTML="";
    for(let i=0;i<30;i++){
        //Creo una variable para meterle la creacion de cada boton con su dia correspondiente
        let boton=document.createElement("button");
        //Creación de los números
        boton.textContent=i+1; 
        //pongo una funcion vacia para que cuando abra la página me salgan los botones
        boton.addEventListener("click",function(){
        guardarDia(i+1)
        });  
        //Creo los botones en el div Calendario
        calendario.appendChild(boton);
    }
}

function guardarDia(dia){
     diaSeleccionado=dia;
     alert("Has seleccionado el dia: "+diaSeleccionado);
}
function guardarAnotacion(){
    try{
        if(diaSeleccionado==null){
            throw "Tienes que seleccionar un dìa";
        }
        if(texto.value == ''){
            throw "El texto no puede estar vacío";
        }
        //Ahora guardo el dia y el texto en el array 
        anotaciones[diaSeleccionado]=texto.value;

        //Luego de guardarlo, limpio la pagina
        diaSeleccionado=null;
        texto.value=null;
        
        alert("Anotacion guardada correctamente");
    }catch(e){
        alert(e);
    }
}

//Funcion para visualizar el dia con la anotacion
function visualizarAnotaciones(){
    try{
       
        //creo un if para ver si el array anotaciones no está vacio
        if(anotaciones.length===0){
            throw "El array está vacío";
        }
        let sbVisualizar="Anotaciones /n" // es mi StringBui

        for(let i=0;i<anotaciones.length;i++){
            //Uso un if solo para ver los dias que tienen anotaciones
            if(anotaciones[i]){
                // Uso += para no sobreescribir el sbVisualizar
                sbVisualizar += "Día "+ i + ": "+ anotaciones[i]+ "/n"; 
            }
        }
        alert(sbVisualizar);
    }catch(e){
        alert(e);
    }
}

//Evento de los botones
btnInicializar.addEventListener("click",guardarAnotacion);
btnVisualizar.addEventListener("click",visualizarAnotaciones);

//Llamo a la función para cargar los dias
inicializarCalendario();