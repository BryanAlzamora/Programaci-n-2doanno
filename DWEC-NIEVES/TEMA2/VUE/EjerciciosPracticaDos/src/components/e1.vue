<script setup>
import {ref,computed} from 'vue'
const nombre=ref('');
const apellido=ref('');

const nombreCompleto=computed(()=>{
    return `${nombre.value} ${apellido.value}`;
});
</script>

<template>
  <h1>Ejercicio1</h1>
  <h2>Tu nombre completo es: {{ nombreCompleto}}</h2>
  <p>Nombre:<input type="text"  v-model="nombre"></p>
  <p>Apellido<input type="text" v-model="apellido"></p>
 </template> 