<script setup>
import {ref} from 'vue'
import {usePedidosStore} from '../stores/pedidos'

const pedidosStore= usePedidosStore();
const pedidoSeleccionado= ref(null);
</script>

<template>
<h2>Mis pedidos</h2>

<ul>
    <li 
    v-for="p in pedidosStore"
    :key="p.idPedido"
    @click="pedidoSeleccionado = p"
    >
        Pedido {{ p.idPedido }} - {{ p.fecha }}
    </li>

    <div v-if="pedidoSeleccionado">
        <h3>Detalle de pedido</h3>

        <ul>
            <li
                v.for="l in pedidoSeleccionado.lineas"
                :key="l.producto"
            >
            {{ l.producto }} - {{ l.cantidad }} - {{ l.importe }}
            </li>
        </ul>
    </div>
</ul>
</template>