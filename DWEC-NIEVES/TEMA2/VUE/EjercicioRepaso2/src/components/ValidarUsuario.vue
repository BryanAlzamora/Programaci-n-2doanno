<script setup>
import {ref, defineEmits} from 'vue'
 
const emit=defineEmits(['validarUsuario']);

const id=ref('')
const password=ref('')

function validarUsuario(){
  try{
    const obj={
      id:id.value,
      password:password.value
    }
    const expRegular=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[^\s]{8,}$/;
    if(!expRegular.test(password.value)){
      throw 'La contraseña no tiene un formato válido'
    }
    if(id.value.length < 4){
      throw 'El usuario tiene que ser mayor o igual a 4 dígitos'
    }
    emit('validarUsuario',obj)

  }catch(error){
    alert(error)
  }
}
</script>

<template>
  <div>
    <div>
        <label>Usuario <input type="text" v-model="id"></label>
        <br>
        <label>Password <input type="password" v-model="password"></label>
        <br>
        <button @click="validarUsuario">Ingresar</button>
    </div>
  </div>
</template>
