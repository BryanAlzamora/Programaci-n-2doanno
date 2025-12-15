<script setup>
    import {ref} from 'vue'
    const contador= ref(0);
   

    function Incrementar(){
        contador.value++;
    }
    function Decrementar(){
        contador.value--;
    }
    function Restablecer(){
        contador.value=0;
    }
</script>

<template>
    <h1>Ejercicio1</h1>
    <p>Contador: {{contador}}</p>
    <button @click="Incrementar">Incrementar</button>
    <button @click="Decrementar">Decrementar</button>
    <button @click="Restablecer">Restablecer</button>
</template>