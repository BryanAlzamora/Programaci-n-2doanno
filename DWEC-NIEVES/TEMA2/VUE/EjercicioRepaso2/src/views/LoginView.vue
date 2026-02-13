<script setup>
import ValidarUsuario from '@/components/ValidarUsuario.vue'
import {defineEmits} from 'vue'

const emit=defineEmits(['validarUsuario']);

function validarUsuario(obj){
  emit('validarUsuario',obj)
}

</script>

<template>
<ValidarUsuario @validarUsuario="validarUsuario"></ValidarUsuario>
</template>