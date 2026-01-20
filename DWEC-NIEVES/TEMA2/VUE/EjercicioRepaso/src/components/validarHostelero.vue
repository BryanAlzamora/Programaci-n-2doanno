<script setup>
import{ref,defineEmits} from 'vue'

const id=ref('');
const password=ref('');

//evento que se enviará al padre App.vue
const emit=defineEmits(['validarHostelero']);

function validarPassword(pwd){
    const expRegular=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])\S{8,}$/
    return expRegular.test(pwd);
}
function validarId(id){
    const expRegular=/^[0-9]{4}$/
    return expRegular.test(id);
}

function validarHostelero(){
    try{
        if(!validarId(id.value)){
            throw 'El id tiene que ser de 4 numeros';
        }

        if(!validarPassword(password.value)){
            throw 'La contraseña no es correcta';
        }

        //Envia los datos al componente padre App.vue
        emit('validarHostelero', {
            id: id.value,
            password: password.value
        })
    }catch(error){
        alert(error)
    }
}
</script>

<template>
    <h1>Acceso al almacen</h1>
    
    <label>ID: <input v-model="id"></input></label>
    <label>Contraseña: <input v-model="password"></input></label>

    <button @click="validarHostelero">Iniciar Sesión</button>
</template>