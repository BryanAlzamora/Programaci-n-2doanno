import { ref } from 'vue'
import { defineStore } from 'pinia'
import pedidos from '@/datos/pedidos.json'

export const usePedidosStore = defineStore('pedidos', () => {
    const listaPedidos = ref(pedidos);
    const pedidoSeleccionado = ref(null)

    function getPedidoPorId(idHostelero) {
        const hostelero = listaPedidos.value.find(
            (h) => h.id == idHostelero  // == hace conversión de tipo automática
        )

        return hostelero ? hostelero.pedidos : []
    }

    function seleccionarPedido(pedido) {
        pedidoSeleccionado.value = pedido
    }

    return { listaPedidos, pedidoSeleccionado, getPedidoPorId, seleccionarPedido }
})