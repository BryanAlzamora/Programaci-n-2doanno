<script setup>
import { ref, computed, onMounted } from 'vue'
import { useRouter } from 'vue-router'
import VerPedidos from '@/components/VerPedidos.vue'
import VerProductosPedido from '@/components/VerProductosPedido.vue'
import { usePedidosStore } from '@/stores/pedidosStore'

const router = useRouter()
const pedidoStore = usePedidosStore()
const hostelero = ref(null)

const pedidosDelHostelero = computed(() => {
  if (!hostelero.value) return []
  console.log('ID del hostelero:', hostelero.value.id) // ← Debug
  const pedidos = pedidoStore.getPedidoPorId(hostelero.value.id)
  console.log('Pedidos encontrados:', pedidos) // ← Debug
  return pedidos
})

const pedidoActual = computed(() => pedidoStore.pedidoSeleccionado)

onMounted(() => {
  const hosteleroLS = localStorage.getItem('hostelero')
  if (!hosteleroLS) {
    router.push('/login')
  } else {
    hostelero.value = JSON.parse(hosteleroLS)
    console.log('Hostelero cargado:', hostelero.value) // ← Debug
  }
})

function seleccionarPedido(pedido) {
  pedidoStore.seleccionarPedido(pedido)
}
</script>

<template>
  <div v-if="hostelero" class="contenedor-pedidos">
    <VerPedidos 
      :pedidos="pedidosDelHostelero" 
      :nombreEmpresa="hostelero.nombre"
      @seleccionarPedido="seleccionarPedido"
    />
    <VerProductosPedido 
      :pedido="pedidoActual"
    />
  </div>
</template>