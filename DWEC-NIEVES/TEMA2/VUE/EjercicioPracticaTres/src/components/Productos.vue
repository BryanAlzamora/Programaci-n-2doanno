<script setup>
import {inject} from 'vue';
import BtnAgregar from "./BtnAgregar.vue";

// Función global para agregar producto
const agregar= inject("agregarAlCarrito");

const productos=[
    {id:1, nombre:"Raton", precio:10},
    {id:2, nombre:"Teclado",precio:16},
    {id:3, nombre:"Monitor",precio:20},
    {id:4, nombre:"Audifonos",precio:26}
];

</script>
<template>
<div class="productos">
    <h2>Productos</h2>
    <ul>
        <li v-for="p in productos" :key="p.id">
            {{ p.nombre }} - {{ p.precio }}€
            <BtnAgregar @click="agregar(p)"/>
        </li>
    </ul>
</div>
</template>
<style scoped>
.productos{
    width: 45%;
    background: white;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}
h2 {
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
  margin-bottom: 12px;
  padding: 10px;
  background: #f9f9f9;
  border-radius: 6px;
}
</style>