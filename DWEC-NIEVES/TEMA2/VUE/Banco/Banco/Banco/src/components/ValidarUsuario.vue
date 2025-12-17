<script setup>
    // Función: Recoger el  id de usuario y contraseña
    import {ref, defineEmits} from 'vue';

    const id = ref('');
    const password = ref('');

    const emit=defineEmits(['validarUsuario']);

    function fValidar(){
        try
        {
            if (id.value == '' || isNaN(parseInt(id.value)) || password.value == '')
                throw "Datos incorrectos";

            const obj = {
                id: id.value,
                password: password.value
            }
            emit('validarUsuario',obj);
        }
        catch(error)
        {
            alert(error);
        }
    }
</script>

<template>
    <h1>Acceso a banca online</h1>
        <label for="usu">Identificador</label>
        <input type="text" v-model="id">
        <br>
        <label for="pass">Contraseña:</label>
        <input type="password" v-model = "password">
        <br>
        <button type="button" id="iniciar" @click="fValidar">Iniciar sesion</button>
</template>