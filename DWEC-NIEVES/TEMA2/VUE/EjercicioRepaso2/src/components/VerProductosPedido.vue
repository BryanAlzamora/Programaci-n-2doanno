<script setup>
import { defineProps, computed } from 'vue'

const props = defineProps({
  pedido: {
    type: Object,
    default: null
  }
})

const totalPedido = computed(() => {
  if (!props.pedido || !props.pedido.listaProductos) return 0
  return props.pedido.listaProductos.reduce((total, producto) => {
    return total + (producto.cantidad * producto.precioUnidad)
  }, 0)
})
</script>

<template>
  <div class="productos">
    <h1>Productos</h1>
    <div v-if="!pedido" class="sin-seleccion">
      <p>Selecciona un pedido para ver sus productos</p>
    </div>
    <div v-else-if="pedido && pedido.listaProductos">
      <h3>Pedido #{{ pedido.numeroPedido }} - {{ pedido.fecha }}</h3>
      <ul>
        <li 
          v-for="(producto, index) in pedido.listaProductos" 
          :key="index"
          class="producto-item"
        >
          <div class="producto-info">
            <strong>{{ producto.producto }}</strong>
            <span>Cantidad: {{ producto.cantidad }}</span>
            <span>Precio/ud: {{ producto.precioUnidad.toFixed(2) }}€</span>
            <span class="subtotal">
              Subtotal: {{ (producto.cantidad * producto.precioUnidad).toFixed(2) }}€
            </span>
          </div>
        </li>
      </ul>
      <div class="total">
        <strong>TOTAL: {{ totalPedido.toFixed(2) }}€</strong>
      </div>
    </div>
  </div>
</template>