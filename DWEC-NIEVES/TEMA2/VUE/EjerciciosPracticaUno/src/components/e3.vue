<script setup>
    import {ref} from 'vue'
const nombre=ref('Ana');
const edad=ref(25);
const correo=ref('ana@example.com');

function aumentarEdad(){
    edad.value++;
}
</script>

<template>
<h1>Ejercicio3</h1>
<p>{{ nombre }}</p><p>{{ edad }}</p>
<h2>{{ correo }}</h2>
<button @click="aumentarEdad">Cumplir anhos</button>
</template>