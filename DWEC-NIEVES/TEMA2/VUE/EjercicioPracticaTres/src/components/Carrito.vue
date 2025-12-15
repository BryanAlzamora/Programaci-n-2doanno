<script setup>
import {inject} from "vue";
import BtnDisminuir from "./BtnDisminuir.vue";
import BtnEliminar from "./BtnEliminar.vue";

// Inyecto las variables del controaldor
// Esto permite acceder al carrito y funciones desde este componente

const carritoGlobal=inject("carritoGlobal"); // Array reactivo con los productos en el carrito
const disminuir = inject("disminuir");
const eliminar= inject("eliminarDelCarrito");
const total= inject("total");

</script>
<template>
<div class="carrito">
    <h3>Carrito de compras</h3>
    <ul>
        <li v-for="producto in carritoGlobal" :key="producto.id">
            {{ producto.nombre }} - {{ producto.precio }}€ <input type="text" v-model.number="producto.cantidad" min="1">
            
            <BtnDisminuir @click="disminuir(producto.id)"/>
            <BtnEliminar @click="eliminar(producto.id)"/>
        </li>
    </ul>
    <h4>Total: {{ total }}€</h4>
</div>
</template>
<style scoped>
.carrito {
  width: 45%;
  background: white;
  padding: 15px;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}
h3 {
  color: #333;
  margin-bottom: 15px;
}
ul {
  list-style: none;
  padding: 0;
}

li {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
  padding: 8px;
  background: #f9f9f9;
  border-radius: 6px;
}
</style>