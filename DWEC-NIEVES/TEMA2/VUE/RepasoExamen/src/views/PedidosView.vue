<script setup>
import {ref, onMounted,computed} from 'vue'
import {useRouter} from 'vue-router'
import {usePedidosStore} from '@/stores/pedidoStore'
import VerPedidos from '@/components/VerPedidos.vue'
import VerProductosPedido from '@/components/VerProductosPedido.vue'

const router = useRouter()
const pedidoStore = usePedidosStore()
const hostelero = ref(null)

const pedidosDelHostelero = computed(() => {
  if (!hostelero.value) return []
  return pedidoStore.getPedidoPorId(hostelero.value.id)  // ← Usa tu función
})

const pedidoActual = computed(() => pedidoStore.pedidoSeleccionado)

onMounted(() => {
  const hosteleroLS = localStorage.getItem('hostelero')
  if (!hosteleroLS) {
    router.push('/login')
  } else {
    hostelero.value = JSON.parse(hosteleroLS)
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