<script setup>
import {ref, defineEmits} from 'vue'

const id=ref('');
const password=ref('');

const emit=defineEmits(['validarUsuario']);

function fValidar(){
    try{
        const expRegularPwd=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[^\s]{8,}$/;
        
        if(!expRegularPwd.test(password.value)){
            throw 'La contraseña no tiene un formato adecuado'
        }
        if(id.value.length < 4){
            throw 'El id tiene que ser mayor o igual a 4 digitos'
        }
        
        const obj={
            id: id.value,
            password: password.value
        }

        emit('validarUsuario',obj)
    }catch(error){
        alert(error)
    }
}

</script>
<template>
    <h1>Acceso al almacen</h1>
    <label>Usuario: <input type="text" v-model="id"></label>
    <br>
    <label>Password: <input type="password" v-model="password"></label>
    <br>
    <button type="button" id="iniciar" @click="fValidar">Iniciar Sesión</button>
</template>