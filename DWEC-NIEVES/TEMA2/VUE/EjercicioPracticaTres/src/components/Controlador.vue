<script setup>
import { reactive, provide, computed } from "vue";
import Productos from "./Productos.vue";
import Carrito from "./Carrito.vue";

// Array global de carrito
const carritoGlobal = reactive([]);

// Funciones globales
function agregarAlCarrito(producto) {
  const existe = carritoGlobal.find(p => p.id === producto.id);
  if (existe) {
    existe.cantidad++;
  } else {
    // Si no existe, agrega un objeto nuevo
    carritoGlobal.push({
      id: producto.id,
      nombre: producto.nombre,
      precio: producto.precio,
      cantidad: 1
    });
  }
}

function disminuir(id) {
  const producto = carritoGlobal.find(p => p.id === id);
  if (!producto) return;

  if (producto.cantidad > 1) {
    producto.cantidad--; // Disminuye cantidad si hay mas de 1
  } else {
    eliminarDelCarrito(id);
  }
}

function eliminarDelCarrito(id) {
  const producto = carritoGlobal.find(p => p.id === id);
  if (!producto) return;

  const index = carritoGlobal.indexOf(producto);
  if (index !== -1){
    carritoGlobal.splice(index, 1); // Elimina del array
  } 
}

// Total dinámico
const total = computed(() => {
  let suma = 0;
  for (let i = 0; i < carritoGlobal.length; i++) {
    suma += carritoGlobal[i].precio * carritoGlobal[i].cantidad;
  }
  return suma;
});

// Provide global: permite que otros componentes puedan inyectar estas variables y funciones
provide("carritoGlobal", carritoGlobal);
provide("agregarAlCarrito", agregarAlCarrito);
provide("disminuir", disminuir);
provide("eliminarDelCarrito", eliminarDelCarrito);
provide("total", total);
</script>

<template>
  <div>
    <h1>Tienda de informática EGIBIDE-ARRIAGA</h1>
    <div class="contenedor">
      <Productos />
      <Carrito />
    </div>
  </div>
</template>

<style scoped>
.contenedor {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  padding: 30px;
  gap: 40px;
}
</style>
