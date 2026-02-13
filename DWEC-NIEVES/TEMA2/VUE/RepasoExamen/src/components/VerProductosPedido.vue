<script setup>
import {defineProps, computed} from 'vue'

const props= defineProps({
    pedido:{
        type:Object,
        default:null
    }
})

const totalPedido = computed(()=>{
    if(!props.pedido || !props.pedido.listaProductos) return 0

    return props.pedido.listaProductos.reduce((total,producto)=>{
        return total +(producto.cantidad * producto.precioUnidad)
    },0)
})

</script>
<template>
    <h1>Productos</h1>
    <div v-if="!pedido">
        <p>Seleccione un pedido para ver sus productos</p>
    </div>
    <div v-else="pedido && pedido.listaProductos">
    <ul>
        <li
        v-for="(producto,i) in pedido.listaProductos"
        :key="i"
        >
         <p>Producto: {{ producto.producto }}</p>   
         <p>Cantidad: {{ producto.cantidad }}</p>
         <p>Precio: {{ producto.precioUnidad }} EUROS</p>
         <p>Importe: {{ (producto.cantidad * producto.precioUnidad) }} EUROS</p>
        </li>
    </ul>
    <h2>Importe total: {{ totalPedido }} EUROS</h2>
    </div>
    
</template>