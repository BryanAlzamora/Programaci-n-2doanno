<script setup>
import {ref} from 'vue'

const identificador=ref('');
const contrasena=ref('');

</script>

<template>
    <label>Identificador:
        <input type="text" v-model="identificador">
    </label>
    <label>Contraseña:
        <input typ="text" v-model="contrasena">
    </label>
    <button >Iniciar sesion</button>
</template>