<script setup lang="ts">
import { ref } from 'vue'
import { RouterLink } from 'vue-router'
import ValidarHostelero from './components/validarHostelero.vue'
import { useHostelerosStore } from './stores/hosteleros'
import { usePedidosStore } from './stores/pedidos'

const hostelerosStore = useHostelerosStore()
const pedidosStore = usePedidosStore()
const usuario = ref(null)

function fValidar(obj: any) {
  hostelerosStore.fUnHostelero(obj)
  usuario.value = hostelerosStore.unHostelero.value

  if (!usuario.value) {
    alert('Usuario y/o contraseña no válida')
  } else {
    pedidosStore.fPedidosHostelero(usuario.value.id)
    localStorage.setItem('idHostelero', usuario.value.id)
  }
}
</script>

<template>
  <header>
    <ValidarHostelero v-if="!usuario" @validarHostelero="fValidar" />

    <h2 v-else>Bienvenido {{ usuario.nombre }}</h2>
    <nav v-if="usuario">
      <RouterLink to="/">Home</RouterLink>
      <RouterLink to="/pedidos">Pedidos</RouterLink>
    </nav>
  </header>
</template>
