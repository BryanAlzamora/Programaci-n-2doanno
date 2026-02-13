<script setup>
import ValidarUsuario from '../components/ValidarUsuario.vue'
import {defineEmits} from 'vue'

const emit=defineEmits(['validarUsuario'])

function fValidar(obj){
    emit('validarUsuario',obj)
}

</script>

<template>
  <main>
    <ValidarUsuario  @validarUsuario="fValidar"></ValidarUsuario>
  </main>
</template>
