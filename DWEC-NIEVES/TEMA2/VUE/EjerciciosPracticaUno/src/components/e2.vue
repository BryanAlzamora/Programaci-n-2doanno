<script setup>
    import {ref} from 'vue'
    const text=ref('');
    const resultado=ref('');
    function actualizar(){
        resultado.value=text.value;
    }
</script>

<template>
    <h1>Ejericio2</h1>
    <!-- uso v-model para que se actualice-->
    <input type="text" placeholder="Escriba algo" @input="actualizar" v-model="text">
    <p>Usted ha escrito: {{resultado}}</p>
</template>