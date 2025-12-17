<script setup>
    // Función: Mostrar los movimentos de una cuenta que recibe por props. También se puede hacer usando el almacén.
    const props = defineProps({
        mvtos: Array
    })
</script>

<template>
    <ul v-for="(movimiento,index) of props.mvtos" :key="index">
        <li>{{ movimiento.fecha }} -- {{ movimiento.tipo}} -- {{ movimiento.importe}}</li>
    </ul>
</Template>