// Recupera el array desde localStorage o lo inicia vacío si no existe
let ArrayProductos = JSON.parse(localStorage.getItem("ArrayProductos")) || [];

// Asocia los botones a sus funciones cuando se hace clic
document.getElementById("bAnnadir").addEventListener("click", annadirProducto);
document.getElementById("bResetear").addEventListener("click", resetearLista);

// Función para añadir un producto a la lista
function annadirProducto() {
  try {
    // Obtiene el valor del campo de texto y elimina espacios innecesarios
    const nProducto = document.getElementById("tProducto").value.trim();

    // Valida el dato antes de añadirlo
    if (validarDato(nProducto)) {
      // Añade el producto al array
      ArrayProductos.push(nProducto);

      // Guarda el array actualizado en localStorage
      localStorage.setItem("ArrayProductos", JSON.stringify(ArrayProductos));

      // Muestra la lista actualizada en pantalla
      mostrarProducto();

      // Limpia el campo de texto
      document.getElementById("tProducto").value = "";
    }
  } catch (e) {
    // Muestra un mensaje de error si el dato no es válido
    alert(e);
  }
}

// Función para mostrar los productos en la lista visual
function mostrarProducto() {
  // Selecciona el elemento UL donde se mostrarán los productos
  const listaProductos = document.getElementById("listaProductos");

  // Limpia la lista antes de volver a mostrarla
  listaProductos.innerHTML = "";

  // Recupera los productos desde localStorage
  let arrayPro = JSON.parse(localStorage.getItem("ArrayProductos")) || [];

  // Recorre el array y crea un <li> por cada producto
  for (let producto of arrayPro) {
    let li = document.createElement("li");     // Crea un elemento <li>
    li.textContent = producto;                 // Le pone el nombre del producto
    listaProductos.appendChild(li);            // Lo añade a la lista UL
  }
}

// Función para borrar todos los productos
function resetearLista() {
  localStorage.removeItem("ArrayProductos");   // Borra los datos del navegador
  ArrayProductos = [];                         // Vacía el array en memoria
  document.getElementById("listaProductos").innerHTML = ""; // Limpia la lista visual
}

// Función para validar el formato del producto
function validarDato(dato) {
  const expRegular = /^[A-Za-z]{3,10}$/;       // Solo letras, entre 3 y 10 
  if (!expRegular.test(dato)) {
    throw "El dato no tiene un formato adecuado"; // Lanza error si no cumple
  }
  return true; // Si pasa la validación, devuelve true
}

// Muestra los productos al cargar la página
mostrarProducto();