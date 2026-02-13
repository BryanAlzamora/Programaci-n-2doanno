<script setup>
import { defineProps, defineEmits } from 'vue'

const props = defineProps({
  pedidos: {
    type: Array,
    required: true
  },
  nombreEmpresa: {
    type: String,
    required: true
  }
})

const emit = defineEmits(['seleccionarPedido'])

function seleccionarPedido(pedido) {
  emit('seleccionarPedido', pedido)
}
</script>

<template>
  <div class="lista-pedidos">
    <h1>Pedidos de {{ nombreEmpresa }}</h1>
    <div v-if="pedidos.length === 0" class="sin-pedidos">
      <p>No hay pedidos disponibles</p>
    </div>
    <ul v-else>
      <li
        v-for="pedido of pedidos"
        :key="pedido.numeroPedido"
        @click="seleccionarPedido(pedido)"
        class="pedido-item"
      >
        <strong>Pedido #{{ pedido.numeroPedido }}</strong>
        <br>
        <small>Fecha: {{ pedido.fecha }}</small>
      </li>
    </ul>
  </div>
</template>